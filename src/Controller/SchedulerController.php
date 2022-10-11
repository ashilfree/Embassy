<?php

namespace App\Controller;

use App\Entity\Booking;
use App\Entity\Scheduler;
use App\Repository\BookingRepository;
use App\Repository\SchedulerRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Dompdf\Dompdf;
use Dompdf\Options;


class SchedulerController extends AbstractController
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;
    private $logger;
    public function __construct(\Swift_Mailer $mailer, LoggerInterface $logger)
    {
        $this->mailer = $mailer;
        $this->logger = $logger;
    }
    /**
     * @Route("/check-schedule", name="check.schedule")
     * @param Request $request
     * @param SchedulerRepository $schedulerRepository
     * @return JsonResponse
     * @throws \Exception
     */
    public function check(Request $request, SchedulerRepository $schedulerRepository)
    {
        $date = new \DateTime($request->get('date'));

        $schedulers = $schedulerRepository->findBy(['date' => $date]);
        $array =[];
        foreach ($schedulers as $scheduler){
            $array[] = $scheduler->getStartTime();
        }
        $this->logger->info(new JsonResponse(["response" => 'check', "array" => $array]));
        return new JsonResponse(["response" => 'check', "array" => $array]);

    }

    /**
     * @Route("/add-schedule", name="add.schedule")
     * @param Request $request
     * @param SchedulerRepository $schedulerRepository
     * @param BookingRepository $bookingRepository
     */
    public function addSchedule(Request $request, SchedulerRepository $schedulerRepository, BookingRepository $bookingRepository)
    {
        $date = new \DateTime($request->get('date'));
        $time = new \DateTime($request->get('time'));
        $timeStart = $time->format('H:i:s');
        $time->add(new \DateInterval('PT30M'));
        $timeEnd = $time->format('H:i:s');
        $data = json_decode($request->getContent(), true);
        $scheduler = new Scheduler();
        $scheduler->setDate($date);
        $scheduler->setStartTime($timeStart);
        $scheduler->setEndTime($timeEnd);
        $scheduler->setByAdmin(false);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($scheduler);
        $entityManager->flush();
        $booking = new Booking();
        $booking->setSchedule($scheduler);
        $booking->setFullName($data['booking[fullName]']);
        $booking->setCivilNumber($data['booking[civilNumber]']);
        $booking->setEmail($data['booking[email]']);
        $booking->setPhone($data['booking[phone]']);
        $booking->setVisit($data['booking[visit]']);
        $entityManager->persist($booking);
        $entityManager->flush();

        $this->notify($booking, $scheduler);
        $this->logger->info(new JsonResponse(['scheduler' => $scheduler->serialize()]));
        return new JsonResponse(["response" => 'add', 'booking' => $booking->serialize(), 'scheduler' => $scheduler->serialize()]);
    }

    private function notify(Booking $booking, Scheduler $scheduler){
        $message = (new \Swift_Message('RDV'))
            ->setFrom('no-reply@algerianembassy-kuwait.org')
            ->setTo($booking->getEmail())
            ->setReplyTo($booking->getEmail())
            ->setBody($this->render('emails/contact.html.twig', [
                'booking' => $booking,
                'scheduler' => $scheduler
            ]), 'text/html');
        $this->mailer->send($message);
    }


    private function generatePdf():Response
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfOptions);

        $html = $this->renderView('default/mypdf.html.twig');

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');


        $dompdf->render();

        $dompdf->stream("mypdf.pdf",[
            "Attachment" => true
        ]);
        return $this->render('pages/booking.appointments.finish.html.twig');
    }
}
