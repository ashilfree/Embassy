<?php

namespace App\Controller\Admin;

use App\Entity\Affaire;
use App\Entity\Article;
use App\Entity\Booking;
use App\Entity\Document;
use App\Entity\Ambassador;
use App\Entity\Popup;
use App\Entity\Relation;
use App\Entity\Scheduler;
use App\Entity\Section;
use App\Entity\Slider;
use App\Entity\User;
use App\Entity\Visa;
use App\Form\PopupType;
use App\Repository\BookingRepository;
use App\Repository\ConnectedRepository;
use App\Repository\PopupRepository;
use App\Repository\SchedulerRepository;
use App\Repository\VisitStatsRepository;
use DateTimeZone;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends AbstractDashboardController
{

    private $repository;
    /**
     * @var SchedulerRepository
     */
    private $schedulerRepository;
    /**
     * @var PopupCrudController
     */
    private $popupRepository;

    protected $requestStack;
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var VisitStatsRepository
     */
    private $visitStatsRepository;
    /**
     * @var ConnectedRepository
     */
    private $connectedRepository;

    /**
     * DashboardController constructor.
     * @param BookingRepository $repository
     * @param SchedulerRepository $schedulerRepository
     * @param PopupRepository $popupRepository
     * @param RequestStack $requestStack
     * @param LoggerInterface $logger
     */

    public function __construct(BookingRepository $repository, SchedulerRepository $schedulerRepository, PopupRepository $popupRepository, RequestStack $requestStack, LoggerInterface $logger, VisitStatsRepository $visitStatsRepository, ConnectedRepository $connectedRepository)
    {
        $this->repository = $repository;
        $this->schedulerRepository = $schedulerRepository;
        $this->popupRepository = $popupRepository;
        $this->requestStack = $requestStack;
        $this->logger = $logger;
        $this->visitStatsRepository = $visitStatsRepository;
        $this->connectedRepository = $connectedRepository;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $timestamp_5min = time() - (60 * 5);
        $date = new \DateTime();
        $date->setTimezone(new DateTimeZone('Asia/Kuwait'));
        $date->setTime(0,0);
        $previous_week = (new \DateTime())->modify('-200 day');
        $previous_week->setTimezone(new DateTimeZone('Asia/Kuwait'));
        $previous_week->setTime(0,0);
        $this->connectedRepository->deleteLess5Min($timestamp_5min);
        $connected = $this->connectedRepository->findAll();
//        dd($connected);
        $visitStats = $this->visitStatsRepository->findAll();
        $totalVisits = 0;
        foreach ($visitStats as $visit){
            $totalVisits += $visit->getVisitNumber();
        }
        $popup = $this->popupRepository->find(1);
        if($popup->getFileName() != null)
            $popup->setIsRemove(true);
        $request = $this->requestStack->getCurrentRequest();
        $bookings = $this->repository->getTodayBookings();
        $form = $this->createForm(PopupType::class, $popup);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            if($popup->getImageFile() == null && !$popup->getIsRemove())
                $popup->setFileName(null);
            $entityManager->flush();
            return $this->redirectToRoute('admin');
        }
        return $this->render('admin/dashboard.html.twig',[
            'connected' => count($connected),
            'totalVisits' => $totalVisits,
            'bookings' => $bookings,
            'countToday' => $this->repository->getCountTodayBookings(),
            'countLastWeek' => $this->repository->getCountLastWeekBookings(),
            'countLastMonth' => $this->repository->getCountLastMonthBookings(),
            'countLastSixMonth' => $this->repository->getCountLastSixMonthBookings(),
            'byMonth' => $this->repository->getCountLastSixMonthByMonth(),
            'form' => $form->createView(),
            'popup' => $popup
        ]);
    }


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Algeria Embassy in Kuwait');
    }

    public function configureCrud(): Crud
    {
        return Crud::new();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'dw-house');
        yield MenuItem::linkToCrud('Article', 'dw-newspaper', Article::class);
        yield MenuItem::linkToCrud('Slider', 'dw-slideshow', Slider::class);
        yield MenuItem::linkToCrud('Document', 'dw-folder-6', Document::class);
        yield MenuItem::linkToCrud('Scheduling', 'dw-calendar-5', Scheduler::class);
        yield MenuItem::linktoRoute('Booking info', 'dw-calendar-5', 'booking.info');
//        yield MenuItem::linktoRoute('Booking With Ambassador', 'dw-calendar-5', 'booking.with.ambassador.info');
 //       yield MenuItem::linkToCrud('User', 'dw-user', User::class)->setPermission('ROLE_USER');
        yield MenuItem::subMenu('Pages', 'dw-page')->setSubItems([
         MenuItem::linktoCrud('Ambassador', null , Ambassador::class),
         MenuItem::linktoCrud('Consular Affairs', null , Affaire::class),
         MenuItem::linktoCrud('Relations', null , Relation::class),
         MenuItem::linktoCrud('Sections', null , Section::class),
         MenuItem::linktoCrud('Visas', null , Visa::class)
        ]);
        yield MenuItem::linktoRoute('Image Cropper', 'dw-image' , 'image.cropper');
//        yield MenuItem::linkToLogout('Logout', 'dw-logout');
    }
}
