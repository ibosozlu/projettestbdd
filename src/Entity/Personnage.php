<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection;




/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonnageRepository")
 */
class Personnage
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
    private $nom;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $Pv;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $basepv;
    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $baseatk;
    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $atk;
    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $cost;

    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="App\Entity\Skill", mappedBy="personnage")
     */
    private $skill;

    /**
     * @return Collection
     */
    public function getSkill(): Collection
    {
        return $this->skill;
    }

    /**
     * @param Collection $skill
     * @return Personnage
     */
    public function setSkill(Collection $skill): Personnage
    {
        $this->skill = $skill;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getBasepv()
    {
        return $this->basepv;
    }

    /**
     * @param mixed $basepv
     * @return Personnage
     */
    public function setBasepv($basepv)
    {
        $this->basepv = $basepv;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBaseatk()
    {
        return $this->baseatk;
    }

    /**
     * @param mixed $baseatk
     * @return Personnage
     */
    public function setBaseatk($baseatk)
    {
        $this->baseatk = $baseatk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * @param mixed $atk
     * @return Personnage
     */
    public function setAtk($atk)
    {
        $this->atk = $atk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     * @return Personnage
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPv(): ?string
    {
        return $this->Pv;
    }

    public function setPv(string $Pv): self
    {
        $this->Pv = $Pv;

        return $this;
    }
}
