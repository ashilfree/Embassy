<?php

namespace App\Controller\Admin;

use App\Entity\Booking;
use App\Repository\BookingRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Booking::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ...
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ->remove(Crud::PAGE_INDEX, Action::EDIT)
            ->remove(Crud::PAGE_INDEX, Action::DELETE)
            ;
    }

    /**
     * @Route("/booking-info", name="booking.info")
     * @param BookingRepository $repository
     * @return Response
     */
    public function show(BookingRepository $repository)
    {
        $bookings = $repository->getBookings();
        return $this->render('admin/booking.info.html.twig',[
            'bookings' => $bookings
        ]);
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
