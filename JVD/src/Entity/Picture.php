<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PictureRepository")
 */
class Picture
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string",length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="pictures")
     */
    private $user;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tag", inversedBy="pictures")
     */
    private $tags;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Album", inversedBy="pictures")
     */
    private $album;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="picture")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Jaime", mappedBy="picture")
     */
    private $jaimes;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->album = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->jaimes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
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
        }

        return $this;

    }

    public function removeTag(Tag $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
        }

        return $this;
    }

    /**
     * @return Collection|Album[]
     */
    public function getAlbum(): Collection
    {
        return $this->album;
    }

    public function addAlbum(Album $album): self
    {
        if (!$this->album->contains($album)) {
            $this->album[] = $album;
        }

        return $this;
    }

    public function removeAlbum(Album $album): self
    {
        if ($this->album->contains($album)) {
            $this->album->removeElement($album);
        }

        return $this;
    }




    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setPicture($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getPicture() === $this) {
                $comment->setPicture(null);
            }
        }

        return $this;
    }
    public function __toString(){
        // to show the name of the Category in the select
        return $this->image;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * @return Collection|Jaime[]
     */
    public function getJaimes(): Collection
    {
        return $this->jaimes;
    }

    public function addJaime(Jaime $jaime): self
    {
        if (!$this->jaimes->contains($jaime)) {
            $this->jaimes[] = $jaime;
            $jaime->setPicture($this);
        }

        return $this;
    }

    public function removeJaime(Jaime $jaime): self
    {
        if ($this->jaimes->contains($jaime)) {
            $this->jaimes->removeElement($jaime);
            // set the owning side to null (unless already changed)
            if ($jaime->getPicture() === $this) {
                $jaime->setPicture(null);
            }
        }

        return $this;
    }
}
