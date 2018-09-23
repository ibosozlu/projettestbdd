<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CraftEssenceRepository")
 */
class CraftEssence
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
    private $imagename;

    /**
     * @ORM\Column(type="integer")
     */
    private $cost;

    /**
     * @ORM\Column(type="integer")
     */
    private $basehp;

    /**
     * @ORM\Column(type="integer")
     */
    private $baseatk;

    /**
     * @ORM\Column(type="integer")
     */
    private $hp;

    /**
     * @ORM\Column(type="integer")
     */
    private $atk;

    /**
     * @return mixed
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * @param mixed $atk
     * @return CraftEssence
     */
    public function setAtk($atk)
    {
        $this->atk = $atk;
        return $this;
    }


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $icon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lb;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imagefull;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $japanese;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $english;

    /**
     * @return mixed
     */
    public function getJapanese()
    {
        return $this->japanese;
    }

    /**
     * @param mixed $japanese
     * @return CraftEssence
     */
    public function setJapanese($japanese)
    {
        $this->japanese = $japanese;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * @param mixed $english
     * @return CraftEssence
     */
    public function setEnglish($english)
    {
        $this->english = $english;
        return $this;
    }




    /**
     * @return mixed
     */
    public function getImagefull()
    {
        return $this->imagefull;
    }

    /**
     * @param mixed $imagefull
     * @return CraftEssence
     */
    public function setImagefull($imagefull)
    {
        $this->imagefull = $imagefull;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getLb()
    {
        return $this->lb;
    }

    /**
     * @param mixed $lb
     * @return CraftEssence
     */
    public function setLb($lb)
    {
        $this->lb = $lb;
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

    public function getImagename(): ?string
    {
        return $this->imagename;
    }

    public function setImagename(string $imagename): self
    {
        $this->imagename = $imagename;

        return $this;
    }

    public function getCost(): ?int
    {
        return $this->cost;
    }

    public function setCost(int $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getBasehp(): ?int
    {
        return $this->basehp;
    }

    public function setBasehp(int $basehp): self
    {
        $this->basehp = $basehp;

        return $this;
    }

    public function getBaseatk(): ?int
    {
        return $this->baseatk;
    }

    public function setBaseatk(int $baseatk): self
    {
        $this->baseatk = $baseatk;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }



    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

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
}
