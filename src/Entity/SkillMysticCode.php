<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillMysticCodeRepository")
 */
class SkillMysticCode
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl6;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl7;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl8;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl9;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lvl10;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagename;

    /**
     * @ORM\ManyToOne(targetEntity="MysticCode", inversedBy="skillmysticcode")
     * @ORM\JoinColumn(name="mysticcode_id", referencedColumnName="id")
     */
    private $mysticcode;

    /**
     * @return mixed
     */
    public function getMysticcode()
    {
        return $this->mysticcode;
    }

    /**
     * @param mixed $mysticcode
     * @return SkillMysticCode
     */
    public function setMysticcode($mysticcode)
    {
        $this->mysticcode = $mysticcode;
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

    public function getLvl1(): ?string
    {
        return $this->lvl1;
    }

    public function setLvl1(string $lvl1): self
    {
        $this->lvl1 = $lvl1;

        return $this;
    }

    public function getLvl2(): ?string
    {
        return $this->lvl2;
    }

    public function setLvl2(string $lvl2): self
    {
        $this->lvl2 = $lvl2;

        return $this;
    }

    public function getLvl3(): ?string
    {
        return $this->lvl3;
    }

    public function setLvl3(string $lvl3): self
    {
        $this->lvl3 = $lvl3;

        return $this;
    }

    public function getLvl4(): ?string
    {
        return $this->lvl4;
    }

    public function setLvl4(string $lvl4): self
    {
        $this->lvl4 = $lvl4;

        return $this;
    }

    public function getLvl5(): ?string
    {
        return $this->lvl5;
    }

    public function setLvl5(string $lvl5): self
    {
        $this->lvl5 = $lvl5;

        return $this;
    }

    public function getLvl6(): ?string
    {
        return $this->lvl6;
    }

    public function setLvl6(string $lvl6): self
    {
        $this->lvl6 = $lvl6;

        return $this;
    }

    public function getLvl7(): ?string
    {
        return $this->lvl7;
    }

    public function setLvl7(string $lvl7): self
    {
        $this->lvl7 = $lvl7;

        return $this;
    }

    public function getLvl8(): ?string
    {
        return $this->lvl8;
    }

    public function setLvl8(string $lvl8): self
    {
        $this->lvl8 = $lvl8;

        return $this;
    }

    public function getLvl9(): ?string
    {
        return $this->lvl9;
    }

    public function setLvl9(string $lvl9): self
    {
        $this->lvl9 = $lvl9;

        return $this;
    }

    public function getLvl10(): ?string
    {
        return $this->lvl10;
    }

    public function setLvl10(string $lvl10): self
    {
        $this->lvl10 = $lvl10;

        return $this;
    }

    public function getImagename(): ?string
    {
        return $this->imagename;
    }

    public function setImagename(string $imagename): self
    {
        $this->imagename = $imagename;

        return $this;
    }
}
