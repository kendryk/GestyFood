<?php

namespace App\Entity;

use App\Repository\UnityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UnityRepository::class)
 */
class Unity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
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
    private $photo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $UpdateAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $createdBy;

    /**
     * @ORM\OneToMany(targetEntity=Resident::class, mappedBy="unity", orphanRemoval=true)
     */
    private $residents;

    /**
     * @ORM\ManyToOne(targetEntity=Hearth::class, inversedBy="unities")
     * @ORM\JoinColumn(nullable=false)
     */
    private $hearth;

    public function __construct()
    {
        $this->residents = new ArrayCollection();
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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->UpdateAt;
    }

    public function setUpdateAt(\DateTimeInterface $UpdateAt): self
    {
        $this->UpdateAt = $UpdateAt;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(string $createdBy): self
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * @return Collection|Resident[]
     */
    public function getResidents(): Collection
    {
        return $this->residents;
    }

    public function addResident(Resident $resident): self
    {
        if (!$this->residents->contains($resident)) {
            $this->residents[] = $resident;
            $resident->setUnity($this);
        }

        return $this;
    }

    public function removeResident(Resident $resident): self
    {
        if ($this->residents->removeElement($resident)) {
            // set the owning side to null (unless already changed)
            if ($resident->getUnity() === $this) {
                $resident->setUnity(null);
            }
        }

        return $this;
    }

    public function getHearth(): ?Hearth
    {
        return $this->hearth;
    }

    public function setHearth(?Hearth $hearth): self
    {
        $this->hearth = $hearth;

        return $this;
    }
}
