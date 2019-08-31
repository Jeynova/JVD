<?php

namespace App\Controller;


use App\Entity\Comment;
use App\Entity\Picture;
use App\Form\CommentType;
use App\Repository\PictureRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

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
                'test' => $picture
            ]);
    }

    /**
     * @Route ("/picture/{id}",name="picture_show")
     */
    public function showPicture(Picture $picture, Request $request, ObjectManager $manager)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $comment->setDate(new \DateTime());
            $comment->setPicture($picture);
            $comment->setUser($this->getUser());

        }

    }
}
