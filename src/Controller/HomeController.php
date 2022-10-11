<?php


namespace App\Controller;
use App\Entity\Article;
use App\Entity\Booking;
use App\Entity\BookingWithAmbassador;
use App\Form\BookingType;
use App\Form\BookingWithAmbassadorType;
use App\Repository\AffaireRepository;
use App\Repository\AmbassadorRepository;
use App\Repository\ArticleRepository;
use App\Repository\DocumentRepository;
use App\Repository\PopupRepository;
use App\Repository\RelationRepository;
use App\Repository\SchedulerRepository;
use App\Repository\SectionRepository;
use App\Repository\SliderRepository;
use App\Repository\VisaRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @var ArticleRepository
     */
    private $repository;
    /**
     * @var PaginatorInterface
     */
    private $paginator;
    /**
     * @var SliderRepository
     */
    private $sliderRepository;
    /**
     * @var PopupRepository
     */
    private $popupRepository;
    /**
     * @var AmbassadorRepository
     */
    private $ambassadorRepository;
    /**
     * @var RelationRepository
     */
    private $relationRepository;
    /**
     * @var SectionRepository
     */
    private $sectionRepository;
    /**
     * @var AffaireRepository
     */
    private $affaireRepository;
    /**
     * @var VisaRepository
     */
    private $visaRepository;
    /**
     * @var SchedulerRepository
     */
    private $schedulerRepository;

    public function __construct(
        ArticleRepository $repository,
        PaginatorInterface $paginator,
        SliderRepository $sliderRepository,
        PopupRepository $popupRepository,
        AmbassadorRepository $ambassadorRepository,
        SectionRepository $sectionRepository,
        RelationRepository $relationRepository,
        AffaireRepository $affaireRepository,
        VisaRepository $visaRepository,
        SchedulerRepository $schedulerRepository
    )
    {
        $this->repository = $repository;
        $this->paginator = $paginator;
        $this->sliderRepository = $sliderRepository;
        $this->popupRepository = $popupRepository;
        $this->ambassadorRepository = $ambassadorRepository;
        $this->relationRepository = $relationRepository;
        $this->sectionRepository = $sectionRepository;
        $this->affaireRepository = $affaireRepository;
        $this->visaRepository = $visaRepository;
        $this->schedulerRepository = $schedulerRepository;
    }

    /**
     * @Route("/",name="home")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request):Response
    {
        $page = $request->get('page',1);
        if(!$request->get('ajax') && $page > 1)
            return $this->redirectToRoute('home');


        $articles = $this->paginator->paginate(
            $this->repository->getQuery(),
            $request->query->getInt('page', $page),
            3
        );


        $popup = $this->popupRepository->find(1);
        if($request->get('ajax')){
            return new JsonResponse([
                "content" => $this->renderView('includes/_articles.html.twig', ['articles' => $articles]),
                'pagination' => $this->renderView('includes/_more.html.twig', ['articles' => $articles]),
                'pages' => ceil($articles->getTotalItemCount() / $articles->getItemNumberPerPage()),
            ]);
        }
        return $this->render('pages/index.html.twig',[
            'page' => 'home',
            'articles' => $articles,
            'sliders' => $this->sliderRepository->findAll(),
            'popup' => $popup,
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/article/{slug}-{id}",name="article", requirements={"slug":"[a-z0-9\-]*"})
     * @param Article $article
     * @param string $slug
     * @return Response
     */
    public function article(Article $article, string $slug):Response
    {
        $mySlug = $article->getSlug();
        if ($mySlug !== $slug) {
            return $this->redirectToRoute('article', [
                'id' => $article->getId(),
                'slug' => $mySlug
            ],
                301);
        }

        return $this->render('pages/article.html.twig',[
            'page' => 'article',
            'article' => $article,
            'sliders' => $this->sliderRepository->findAll(),
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/page/{id}-{class}", name="page")
     * @param int $id
     * @param string $class
     * @return Response
     */
    public function page(int $id, string $class)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->find($class, $id);
        $p = "";
        if($class == "App\Entity\Ambassador")
            $p = 'ambassador';
        if($class == "App\Entity\Section")
            $p = 'section';
        if($class == "App\Entity\Relation")
            $p = 'relation';
        if($class == "App\Entity\Affaire")
            $p = 'affair';
        if($class == "App\Entity\Visa")
            $p = 'visa';
        return $this->render('pages/page.html.twig', [
            'page' => $p,
            'p' => $page,
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/contact",name="contact")
     * @return Response
     */
    public function contact():Response
    {

        return $this->render('pages/contact.html.twig',[
            "page" => "contact",
            "sousPage" => "contact",
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/document",name="document")
     * @param DocumentRepository $repository
     * @return Response
     */
    public function document(DocumentRepository $repository):Response
    {
        $documents = $repository->findAll();
        return $this->render('pages/document.html.twig',[
            "page" => "document",
            "sousPage" => "document",
            "documents" => $documents,
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/before-booking",name="before.booking")
     * @param Request $request
     * @return Response
     */
    public function book(Request $request):Response
    {

        return $this->render('pages/booking.html.twig',[
            "page" => "booking",
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/booking-appointments",name="booking.appointments")
     * @param Request $request
     * @return Response
     */
    public function booking(Request $request):Response
    {
        $booking = new Booking();
        $form = $this->createForm(BookingType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $schedule = $this->schedulerRepository->find(1);
            $entityManager = $this->getDoctrine()->getManager();
            $booking->setSchedule($schedule);
            $entityManager->persist($booking);
            $entityManager->flush();

            return $this->redirectToRoute('booking_index');
        }
        return $this->render('pages/booking.appointments.html.twig',[
            "page" => "booking",
            'booking' => $booking,
            'form' => $form->createView(),
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/booking-appointments-with-ambassador",name="booking.appointments.with.ambassador")
     * @param Request $request
     * @return Response
     */
    public function bookingwithambassador(Request $request):Response
    {
        $booking = new BookingWithAmbassador();
        $form = $this->createForm(BookingWithAmbassadorType::class, $booking);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($booking);
            $entityManager->flush();

            return $this->render('pages/booking.with.ambassador.with.success.html.twig',[
                "page" => "booking",
                'ambassador' => $this->ambassadorRepository->findAll(),
                'section' => $this->sectionRepository->findAll(),
                'relation' => $this->relationRepository->findAll(),
                'affair' => $this->affaireRepository->findAll(),
                'visa' => $this->visaRepository->findAll(),
            ]);
        }
        return $this->render('pages/booking.with.ambassador.html.twig',[
            "page" => "booking",
            'booking' => $booking,
            'form' => $form->createView(),
            'ambassador' => $this->ambassadorRepository->findAll(),
            'section' => $this->sectionRepository->findAll(),
            'relation' => $this->relationRepository->findAll(),
            'affair' => $this->affaireRepository->findAll(),
            'visa' => $this->visaRepository->findAll(),
        ]);
    }
}