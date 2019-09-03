<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
    private $targetDirectory;
    const UPLOAD_AVATAR = 0;

    public function __construct($targetDirectory)
    {
        $this->targetDirectory = $targetDirectory;
    }

    public function upload(UploadedFile $file,$uploadType,$name)
    {

        $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $fileName = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
        switch ($uploadType) {
    case 0:

    $filesystem = new Filesystem();
    $folderURL = $this->getParameter("images_directory");

    if (!$filesystem->exists($folderURL."/".$user->getUsername()."/avatar")) {
      try {
        $filesystem->mkdir($folderURL."/".$user->getUsername()."/avatar", 0700);
      } catch (IOExceptionInterface $exception) {
        echo "An error occurred while creating your directory at ".$exception->getPath();
      }
    }
    try {
        $file->move($folderURL."/".$user->getUsername()."/avatar", $fileName);
    } catch (FileException $e) {
        // ... handle exception if something happens during file upload
    }
        break;
    case 1:
        echo "i égal 1";
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
