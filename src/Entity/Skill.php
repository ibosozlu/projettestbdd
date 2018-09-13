<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillRepository")
 */
class Skill
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
     * @ORM\Column(type="string", length=255)
     */
    private $target;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cd;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl1;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl2;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl3;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl4;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl5;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl6;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl7;

    /**
     * @return mixed
     */
    public function getLvl7()
    {
        return $this->lvl7;
    }

    /**
     * @param mixed $lvl7
     * @return Skill
     */
    public function setLvl7($lvl7)
    {
        $this->lvl7 = $lvl7;
        return $this;
    }

    /**
     * @ORM\Column(type="string")
     */
    private $lvl8;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl9;

    /**
     * @ORM\Column(type="string")
     */
    private $lvl10;

    /**
     * @ORM\ManyToOne(targetEntity="Personnage", inversedBy="skill")
     * @ORM\JoinColumn(name="personnage_id", referencedColumnName="id")
     */
    private $personnage;

    /**
     * @return mixed
     */
    public function getPersonnage()
    {
        return $this->personnage;
    }

    /**
     * @param mixed $personnage
     * @return Skill
     */
    public function setPersonnage($personnage)
    {
        $this->personnage = $personnage;
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

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getCd(): ?string
    {
        return $this->cd;
    }

    public function setCd(string $cd): self
    {
        $this->cd = $cd;

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

    public function getLvl1(): ?int
    {
        return $this->lvl1;
    }

    public function setLvl1(int $lvl1): self
    {
        $this->lvl1 = $lvl1;

        return $this;
    }

    public function getLvl2(): ?int
    {
        return $this->lvl2;
    }

    public function setLvl2(int $lvl2): self
    {
        $this->lvl2 = $lvl2;

        return $this;
    }

    public function getLvl3(): ?int
    {
        return $this->lvl3;
    }

    public function setLvl3(int $lvl3): self
    {
        $this->lvl3 = $lvl3;

        return $this;
    }

    public function getLvl4(): ?int
    {
        return $this->lvl4;
    }

    public function setLvl4(int $lvl4): self
    {
        $this->lvl4 = $lvl4;

        return $this;
    }

    public function getLvl5(): ?int
    {
        return $this->lvl5;
    }

    public function setLvl5(int $lvl5): self
    {
        $this->lvl5 = $lvl5;

        return $this;
    }

    public function getLvl6(): ?int
    {
        return $this->lvl6;
    }

    public function setLvl6(int $lvl6): self
    {
        $this->lvl6 = $lvl6;

        return $this;
    }

    public function getLvl8(): ?int
    {
        return $this->lvl8;
    }

    public function setLvl8(int $lvl8): self
    {
        $this->lvl8 = $lvl8;

        return $this;
    }

    public function getLvl9(): ?int
    {
        return $this->lvl9;
    }

    public function setLvl9(int $lvl9): self
    {
        $this->lvl9 = $lvl9;

        return $this;
    }

    public function getLvl10(): ?int
    {
        return $this->lvl10;
    }

    public function setLvl10(int $lvl10): self
    {
        $this->lvl10 = $lvl10;

        return $this;
    }
}
