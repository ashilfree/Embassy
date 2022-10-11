<?php

namespace App\Controller\Admin;

use App\Entity\Scheduler;
use App\Repository\SchedulerRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SchedulerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Scheduler::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Scheduler')
            ->overrideTemplate('crud/index', 'admin/scheduler.html.twig')
            ->setEntityLabelInPlural('Scheduler')
            ->showEntityActionsAsDropdown()
            ->setSearchFields(['id', 'startTime', 'endTime']);
    }

    public function configureFields(string $pageName): iterable
    {
        $date = DateField::new('date');
        $startTime = TextField::new('startTime');
        $endTime = TextField::new('endTime');
        $id = IntegerField::new('id', 'ID');

        if (Crud::PAGE_INDEX === $pageName) {
            return [$id, $date, $startTime, $endTime];
        } elseif (Crud::PAGE_DETAIL === $pageName) {
            return [$id, $date, $startTime, $endTime];
        } elseif (Crud::PAGE_NEW === $pageName) {
            return [$date, $startTime, $endTime];
        } elseif (Crud::PAGE_EDIT === $pageName) {
            return [$date, $startTime, $endTime];
        }
    }

    /**
     * @Route("/check-schedule-backend/{date}", name="check.schedule.backend")
     * @param string $date
     * @param Request $request
     * @param SchedulerRepository $schedulerRepository
     * @return JsonResponse
     * @throws \Exception
     */
    public function check(string $date, Request $request, SchedulerRepository $schedulerRepository)
    {
        $schedulers = $schedulerRepository->findBy(['date' => new \DateTime($date)]);
        $arrayAdmin =[];
        $arrayCitizen =[];
        foreach ($schedulers as $scheduler){
            if($scheduler->getByAdmin()) {
                $arrayCitizen[] = $scheduler->getStartTime();
            }else{
                $arrayAdmin[] = $scheduler->getStartTime();
            }
        }

        return new JsonResponse(["response" => 'check', "arrayAdmin" => $arrayAdmin, "arrayCitizen" => $arrayCitizen]);

    }

    /**
     * @Route("/update-schedule-backend", name="update.schedule.backend")
     * @param Request $request
     * @param SchedulerRepository $schedulerRepository
     * @throws \Exception
     */
    public function update(Request $request, SchedulerRepository $schedulerRepository)
    {
        $data = json_decode($request->getContent(), true);
        $date = new \DateTime($data['date']);
        $arraySlots = $data['data'];
        $schedulers = $schedulerRepository->findBy(['date' => $date]);
        $array = [];
        foreach ($schedulers as $scheduler){
            if(!$scheduler->getByAdmin())
                continue;
            $array[] = $scheduler->getStartTime();
        }

        $arrayForAdd = array_diff($arraySlots, $array);
        $arrayForRemove = array_diff($array, $arraySlots);

        foreach ($arrayForAdd as $t){
            $time = new \DateTime($t);
            $timeStart = $time->format('H:i:s');
            $time->add(new \DateInterval('PT30M'));
            $timeEnd = $time->format('H:i:s');
            $scheduler = new Scheduler();
            $scheduler->setDate($date);
            $scheduler->setStartTime($timeStart);
            $scheduler->setEndTime($timeEnd);
            $scheduler->setByAdmin(true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($scheduler);
            $entityManager->flush();
        }
        foreach ($arrayForRemove as $t){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($schedulerRepository->findOneBy(["startTime" => $t]));
            $entityManager->flush();
        }

        return new JsonResponse(["response" => 'update']);
    }
}
