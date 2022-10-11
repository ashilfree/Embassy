<?php

namespace App\Controller\Admin;

use App\Entity\BookingWithAmbassador;
use App\Repository\BookingRepository;
use App\Repository\BookingWithAmbassadorRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookingWithAmbassadorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BookingWithAmbassador::class;
    }

    /**
     * @Route("/booking-with-ambassador-info", name="booking.with.ambassador.info")
     * @param BookingWithAmbassadorRepository $repository
     * @return Response
     */
    public function show(BookingWithAmbassadorRepository $repository)
    {
        $bookings = $repository->findAll();
        return $this->render('admin/booking.with.ambassador.info.html.twig',[
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
