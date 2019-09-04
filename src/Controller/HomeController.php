<?php

namespace App\Controller;


use App\Repository\PictureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;




class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(PictureRepository $picture)
    {
        $p = $picture->findAll();
      $user = $this->getUser();
        return $this->render('home/index.html.twig', [
            'picture' => $p,
            'user'=>$user,
        ]);
    }

}
