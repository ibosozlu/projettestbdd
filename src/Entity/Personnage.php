<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Entity\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;



/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonnageRepository")
 *  @Vich\Uploadable
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
     * @ORM\Column(type="string", length=255)
     */
    private $class;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $classid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ascension1;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ascension2;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ascension3;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ascension4;

    /**
     * @return mixed
     */
    public function getAscension1()
    {
        return $this->ascension1;
    }

    /**
     * @param mixed $ascension1
     * @return Personnage
     */
    public function setAscension1($ascension1)
    {
        $this->ascension1 = $ascension1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAscension2()
    {
        return $this->ascension2;
    }

    /**
     * @param mixed $ascension2
     * @return Personnage
     */
    public function setAscension2($ascension2)
    {
        $this->ascension2 = $ascension2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAscension3()
    {
        return $this->ascension3;
    }

    /**
     * @param mixed $ascension3
     * @return Personnage
     */
    public function setAscension3($ascension3)
    {
        $this->ascension3 = $ascension3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAscension4()
    {
        return $this->ascension4;
    }

    /**
     * @param mixed $ascension4
     * @return Personnage
     */
    public function setAscension4($ascension4)
    {
        $this->ascension4 = $ascension4;
        return $this;
    }




    /**
     * @return mixed
     */
    public function getClassid()
    {
        return $this->classid;
    }

    /**
     * @param mixed $classid
     * @return Personnage
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;
        return $this;
    }





    /**
     * @ORM\Column(type="string", length=255)
     */
    private $np;

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     * @return Personnage
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNp()
    {
        return $this->np;
    }

    /**
     * @param mixed $np
     * @return Personnage
     */
    public function setNp($np)
    {
        $this->np = $np;
        return $this;
    }


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
















    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName", size="imageSize")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $imageSize;


    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     */
    public function setImageFile(?File $image = null): void
    {
        $this->imageFile = $image;

        if (null !== $image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }
















}
