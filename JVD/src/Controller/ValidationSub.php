<?php

namespace App\Controller;


use App\Entity\User;
use App\Entity\Album;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use App\Repository\AlbumRepository;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;


class ValidationSub extends AbstractController {


  /**
  * @Route("/validationSub/{token}", name="validation")
  */
  function checkLink(Request $request,UserRepository $userRepository,AlbumRepository $albumRepository,String $token){

    $user = $userRepository->findOneBy(array('mailtoken' => $token));
    if ($user) {
      $entityManager = $this->getDoctrine()->getManager();
      $user->setIsValidated(1);
      $user->setMailtoken("");
      $albumFav = new Album();
      $albumFav->setTitle("Favoris");
      $albumFav->setIsPrivate(1);
      $albumFav->setUser($user);
      $entityManager->persist($albumFav);
      $entityManager->persist($user);
      $entityManager->flush();

      return $this->render('validationSub/validationSub.html.twig');
    }
    else {
      return RedirectToAction("home/index", "index");
    }

  }

}

 ?>
