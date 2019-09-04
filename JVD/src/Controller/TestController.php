<?php

namespace App\Controller;


use App\Repository\AdminRepository;
use App\Repository\UserRepository;
use App\Repository\ArtistRepository;
use App\Repository\EventRepository;
use App\Repository\ProductRepository;
use App\Repository\ActuRepository;
use Doctrine\Common\Collections\Collection as Collec;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * @Route("/test")
 */
class TestController extends AbstractController {


    /**
     * @Route("/", name="test", methods={"GET", "POST"})
     */
    public function index(Request $request) : Response {
        return $this->render('test/form_tag_test.html.twig', [
            'page_title' => 'Test Page',
        ]);
    }

}