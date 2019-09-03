<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Picture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FileUploader;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function index(User $user): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $pictures = $this->getDoctrine()
            ->getRepository(Picture::class)
            ->findBy(array('user'=> $user->getId()));
        return $this->render('user/index.html.twig', [
            'pictures' => $pictures,
        ]);
    }



    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user,FileUploader $fileUploader): Response
    {
        $uploadType = FileUploader::UPLOAD_AVATAR;
        $form = $this->createForm(UserType::class, $user);
        // var_dump($user->getRoles()); die;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          $imageFile = $form['picture']->getData();
          if ($imageFile) {
            $imageFileName = $fileUploader->upload($imageFile,$fileUploader,$user);
            $user->setPicture($imageFileName);
        }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }
}
