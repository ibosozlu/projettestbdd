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



    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * @return string
     */
    public function getImageName(): string
    {
        return $this->imageName;
    }

    /**
     * @param string $imageName
     * @return Skill
     */
    public function setImageName(string $imageName): Skill
    {
        $this->imageName = $imageName;
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

    /**
     * @return mixed
     */
    public function getLvl1()
    {
        return $this->lvl1;
    }

    /**
     * @param mixed $lvl1
     */
    public function setLvl1($lvl1): void
    {
        $this->lvl1 = $lvl1;
    }

    /**
     * @return mixed
     */
    public function getLvl2()
    {
        return $this->lvl2;
    }

    /**
     * @param mixed $lvl2
     * @return Skill
     */
    public function setLvl2($lvl2)
    {
        $this->lvl2 = $lvl2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLvl3()
    {
        return $this->lvl3;
    }

    /**
     * @param mixed $lvl3
     * @return Skill
     */
    public function setLvl3($lvl3)
    {
        $this->lvl3 = $lvl3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLvl4()
    {
        return $this->lvl4;
    }

    /**
     * @param mixed $lvl4
     * @return Skill
     */
    public function setLvl4($lvl4)
    {
        $this->lvl4 = $lvl4;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLvl5()
    {
        return $this->lvl5;
    }

    /**
     * @param mixed $lvl5
     * @return Skill
     */
    public function setLvl5($lvl5)
    {
        $this->lvl5 = $lvl5;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLvl6()
    {
        return $this->lvl6;
    }

    /**
     * @param mixed $lvl6
     * @return Skill
     */
    public function setLvl6($lvl6)
    {
        $this->lvl6 = $lvl6;
        return $this;
    }

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
     * @return mixed
     */
    public function getLvl8()
    {
        return $this->lvl8;
    }

    /**
     * @param mixed $lvl8
     * @return Skill
     */
    public function setLvl8($lvl8)
    {
        $this->lvl8 = $lvl8;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLvl9()
    {
        return $this->lvl9;
    }

    /**
     * @param mixed $lvl9
     * @return Skill
     */
    public function setLvl9($lvl9)
    {
        $this->lvl9 = $lvl9;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLvl10()
    {
        return $this->lvl10;
    }

    /**
     * @param mixed $lvl10
     * @return Skill
     */
    public function setLvl10($lvl10)
    {
        $this->lvl10 = $lvl10;
        return $this;
    }


}
