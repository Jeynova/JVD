<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class FileUploader
{
    private $params;
    private $targetDirectory;
    const UPLOAD_AVATAR = 0;
    const UPLOAD_IMG = 1;

    public function __construct($targetDirectory,ParameterBagInterface $params)
    {
        $this->targetDirectory = $targetDirectory;
         $this->params = $params;
    }

    public function upload(UploadedFile $file,$uploadType,$name)
    {

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
        switch ($uploadType) {
    case 0:

    $filesystem = new Filesystem();
    $folderURL = $this->params->get("images_directory");

    if (!$filesystem->exists($folderURL."/".$name."/avatar")) {
      try {
        $filesystem->mkdir($folderURL."/".$name."/avatar", 0700);
      } catch (IOExceptionInterface $exception) {
        echo "An error occurred while creating your directory at ".$exception->getPath();
      }
    }
    try {
        $file->move($folderURL."/".$name."/avatar", $fileName);
    } catch (FileException $e) {
        // ... handle exception if something happens during file upload
    }
        break;
    case 1:
    $filesystem = new Filesystem();
    $folderURL = $this->params->get("images_directory");

    if (!$filesystem->exists($folderURL."/".$name."/img")) {
      try {
        $filesystem->mkdir($folderURL."/".$name."/img", 0700);
      } catch (IOExceptionInterface $exception) {
        echo "An error occurred while creating your directory at ".$exception->getPath();
      }
    }
    try {
        $file->move($folderURL."/".$name."/img", $fileName);
    } catch (FileException $e) {
        // ... handle exception if something happens during file upload
    }
        break;
    case 2:
        echo "i égal 2";
        break;
}


        return $fileName;
    }

    public function getTargetDirectory()
    {
        return $this->targetDirectory;
    }
}
