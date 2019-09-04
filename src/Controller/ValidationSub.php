<?php

namespace App\Controller;


use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;


class ValidationSub extends AbstractController {


  /**
  * @Route("/validationSub/{token}", name="validation")
  */
  function checkLink(Request $request,UserRepository $userRepository,String $token){

    $user = $userRepository->findOneBy(array('mailtoken' => $token));
    if ($user) {
      $entityManager = $this->getDoctrine()->getManager();
      $user->setIsValidated(1);
      $user->setMailtoken("");
      
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
