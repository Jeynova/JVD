<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;



/**
 * @Route("/test")
 */
class TestController extends AbstractController
{
  /**
  * @Route("/", name="test", methods={"GET","POST"})
  */
  public function index()
  {

    return $this->render('test/test.html.twig', [
      'controller_name' => 'TestController',]);
    }

  }
