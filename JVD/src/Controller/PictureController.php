<?php

namespace App\Controller;


use App\Entity\Comment;
use App\Entity\Picture;
use App\Form\CommentType;
use App\Form\PictureType;
use App\Repository\PictureRepository;
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
     * @Route ("/picture/{id}",name="picture_show")
     */
    public function showPicture(Picture $picture, Request $request, ObjectManager $manager)
    {
//        $comment = new Comment();
//        $form = $this->createForm(CommentType::class, $comment);
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid()) {
//            $comment->setDate(new \DateTime());
//            $comment->setPicture($picture);
//            $comment->setUser($this->getUser());
//            $manager->persist($comment);
//            $manager->flush();
//            return $this->redirectToRoute('picture_show', [
//                'id' => $picture->getId()
//            ]);
//        }
        return $this->render('picture/pictureShow.html.twig',
            [
                'picture' => $picture,
               // 'formComment' => $form->createView()
            ]);
    }

    /**
     * @Route("/picture/new", name="new_picture")
     * @Route("/picture/{id]/edit",name="edit_picture")
     */
    public function addPicture(Picture $picture = null, Request $request, ObjectManager $manager)
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
            $file = $form->get('Image')->getData();
            $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $picture->setImage($fileName);
            $picture->setUser($this->getUser());
            $manager->persist($picture);
            $manager->flush();

            return $this->redirectToRoute('picture_show', [
                'id' => $picture->getId()
            ]);
        }
        return $this->render('picture/addPicture.html.twig', [
            'formPicture' => $form->createView(),
            'editMode' => $picture->getId() !== null
        ]);
    }

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

    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
}
