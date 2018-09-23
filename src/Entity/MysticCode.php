<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MysticCodeRepository")
 */
class MysticCode
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
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="text")
     */
    private $Quest;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagename;

    /**
     * @return mixed
     */
    public function getImagename()
    {
        return $this->imagename;
    }

    /**
     * @param mixed $imagename
     * @return MysticCode
     */
    public function setImagename($imagename)
    {
        $this->imagename = $imagename;
        return $this;
    }




    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="App\Entity\SkillMysticCode", mappedBy="mysticcode")
     */
    private $skillmysticcode;

    /**
     * @return Collection
     */
    public function getSkillmysticcode(): Collection
    {
        return $this->skillmysticcode;
    }

    /**
     * @param Collection $skillmysticcode
     * @return MysticCode
     */
    public function setSkillmysticcode(Collection $skillmysticcode): MysticCode
    {
        $this->skillmysticcode = $skillmysticcode;
        return $this;
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

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getQuest(): ?string
    {
        return $this->Quest;
    }

    public function setQuest(string $Quest): self
    {
        $this->Quest = $Quest;

        return $this;
    }
}
