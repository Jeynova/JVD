<?php

namespace App\Controller;

use App\Entity\Album;
use App\Form\AlbumType;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Repository\AlbumRepository;
use App\Repository\PictureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


/**
 * @Route("/album")
 */
class AlbumController extends AbstractController
{
    /**
     * @Route("/", name="album_index", methods={"GET","POST"})
     */
    public function index(AlbumRepository $albumRepository, SessionInterface $session): Response
    {   $user = $this->getUser();
      if ($user instanceof User) {
        return $this->render('album/index.html.twig', [
            'albums' => $albumRepository->findBy(array('user' => $user))
        ]);
      }

    }

    /**
     * @Route("/new", name="album_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $album = new Album();
        $form = $this->createForm(AlbumType::class, $album);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $album->setUser($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($album);
            $entityManager->flush();
            return $this->redirectToRoute('album_index');
        }

        return $this->render('album/new.html.twig', [
            'album' => $album,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show/{id}", name="album_show", methods={"GET","POST"})
     */
    public function show(Album $album): Response
    {
        return $this->render('album/show.html.twig', [
            'album' => $album,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="album_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Album $album): Response
    {
        $form = $this->createForm(AlbumType::class, $album);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('album_index');
        }

        return $this->render('album/edit.html.twig', [
            'album' => $album,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="album_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Album $album): Response
    {
        if ($this->isCsrfTokenValid('delete'.$album->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($album);
            $entityManager->flush();
        }

        return $this->redirectToRoute('album_index');
    }


    /**
     * @Route("/ajax", name="album_ajax",methods={"GET","POST"})
     */
    public function ajaxAlbumPicture(Request $request,AlbumRepository $albumRepository, PictureRepository $pictureRepository){
      $albumId =$request->request->get("id");
      $pictureId =$request->request->get("picture");
      $albumTitle =$request->request->get("title");

      $album = $albumRepository -> find($albumId);
      //$picture =  $album->getPictures();
      $pictures = $album->getPictures();
      $pic = $pictureRepository->find($pictureId);
      $match = $pictureRepository->findOneByAlbum($pictureId,$albumId);
        if ($match) {
          $this->addFlash(
            'notice',
            'This picture is already in your album.'
        );
        }
        else {
          $album->addPicture($pic);
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($album);
          $entityManager->flush();
          return $this->redirectToRoute('album_index');
        }

        //return $this->redirectToRoute('album_index');


        return new JsonResponse("coucou");


    }
}
