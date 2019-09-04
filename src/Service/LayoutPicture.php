<?php


namespace App\Service;


use App\Repository\PictureRepository;

class LayoutPicture
{
    public function layoutGrid(PictureRepository $pictureRepository)
    {
        $picture = $pictureRepository->findAll();
        return $this->render('picture/pictureIndex.html.twig',
            [
                'pictures' => $picture
            ]);
    }
}