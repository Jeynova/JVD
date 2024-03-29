<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="App\Repository\AlbumRepository")
*/
class Album
{
   /**
    * @ORM\Id()
    * @ORM\GeneratedValue()
    * @ORM\Column(type="integer")
    */
   private $id;

   /**
    * @ORM\Column(type="string", length=255)
    */
   private $title;

   /**
    * @ORM\Column(type="boolean")
    */
   private $isPrivate;

   /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="albums")
    */
   private $tags;

   /**
    * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="albums")
    */
   private $user;

   /**
    * @ORM\ManyToMany(targetEntity="App\Entity\Picture", mappedBy="album")
    */
   private $pictures;    public function __construct()
   {
       $this->tag = new ArrayCollection();
       $this->pictures = new ArrayCollection();
   }
   public function getId(): ?int
   {
       return $this->id;
   }
   public function getTitle(): ?string
   {
       return $this->title;
   }
   public function setTitle(string $title): self
   {
       $this->title = $title;        return $this;
   }
   public function getIsPrivate(): ?bool
   {
       return $this->isPrivate;
   }
   public function setIsPrivate(bool $isPrivate): self
   {
       $this->isPrivate = $isPrivate;        return $this;
   }
   /**
    * @return Collection|Tag[]
    */
   public function getTags(): Collection
   {
       return $this->tags;
   }
   public function addTag(Tag $tag): self
   {
       if (!$this->tags->contains($tag)) {
           $this->tags[] = $tag;
       }        return $this;
   }
   public function removeTag(Tag $tag): self
   {
       if ($this->tags->contains($tag)) {
           $this->tags->removeElement($tag);
       }        return $this;
   }
   public function getUser(): ?User
   {
       return $this->user;
   }
   public function setUser(?User $user): self
   {
       $this->user = $user;
       return $this;
   }
   /**
    * @return Collection|Picture[]
    */
   public function getPictures(): Collection
   {
       return $this->pictures;
   }
   public function addPicture(Picture $picture): self
   {
       if (!$this->pictures->contains($picture)) {
           $this->pictures[] = $picture;
           $picture->addAlbum($this);
       }        return $this;
   }
   public function removePicture(Picture $picture): self
   {
       if ($this->pictures->contains($picture)) {
           $this->pictures->removeElement($picture);
           $picture->removeAlbum($this);
       }        return $this;
   }
}
