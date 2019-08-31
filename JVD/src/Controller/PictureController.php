<?php

namespace App\Controller;


use App\Repository\PictureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PictureController extends AbstractController
{
    /**
     * @Route("/picture", name="picture")
     */
    public function index(PictureRepository $pictureRepository)
    {
      $picture = $pictureRepository->findAll();
      return $this->render('picture/pictureIndex.html.twig',
          [
              'test'=>'Bonjour picture'
          ]);

    }
}
