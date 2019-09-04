<?php

namespace App\Controller;


use App\Entity\Comment;
use App\Entity\Picture;
use App\Entity\Tag;
use App\Form\CommentType;
use App\Form\PictureType;
use App\Form\TagType;
use App\Repository\PictureRepository;
use App\Repository\TagRepository;
use App\Service\FileUploader;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
                'pictures' => $picture
            ]);
    }

    /**
     * @Route ("/picture/{id}",name="picture_show",requirements={"id":"\d+"})
     */
    public function showPicture(Picture $picture, Request $request, ObjectManager $manager)
    {
        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setDate(new \DateTime());
            $comment->setPicture($picture);
            $comment->setUser($this->getUser());
            $manager->persist($comment);
            $manager->flush();
            return $this->redirectToRoute('picture_show', [
                'id' => $picture->getId()
            ]);
        }
        return $this->render('picture/pictureShow.html.twig',
            [
                'picture' => $picture,
                'formComment' => $form->createView()
            ]);
    }

    /**
     * @Route("/picture/new", name="new_picture")
     * @Route("/picture/{id}/edit",name="edit_picture")
     */
    public function addPicture(TagRepository $tagRepository,Picture $picture = null, Request $request, ObjectManager $manager, FileUploader $fileUploader)
    {
        if (!$picture) {
            $picture = new Picture();
        }

        $form = $this->createForm(PictureType::class, $picture);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$picture->getId()) {
                $picture->setDate(new \DateTime());
            }

            $file = $form->get('image')->getData();
            if ($file) {
                $imageFile = $fileUploader->upload($file);
                $picture->setImage($imageFile);
            }
            $picture->setUser($this->getUser());
            $manager->persist($picture);
            $manager->flush();
            return $this->redirectToRoute('picture_show', [
                'id' => $picture->getId()
            ]);
        }
        return $this->render('picture/addPicture.html.twig', [
            'formPicture' => $form->createView(),
            'editMode' => $picture->getId() !== null,
            'tagName' => $tagRepository->findAll()

        ]);
    }

    /**
     * @Route ("
     */

    /**
     * @Route("/picture/{id}/delete",name="delete_picture")
     */
    public function deletePicture($id, PictureRepository $pictureRepository, ObjectManager $manager)
    {
        $picture = $pictureRepository->find($id);
        if (!$picture) {
            return $this->redirectToRoute('picture');
        }
        $manager->remove($picture);
        $manager->flush();
        $this->addFlash('success', 'L\'image a bien été supprimé');
        return $this->redirectToRoute('picture');
    }

}
