<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionsRepository")
 */
class Questions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subsubject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $questionid;

    /**
     * @ORM\Column(type="integer")
     */
    private $questionvalue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $questioncontent;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $correctanswer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $aanswer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aexplanation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $banswer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bexplanation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $canswer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cexplanation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $danswer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dexplanation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getSubsubject(): ?string
    {
        return $this->subsubject;
    }

    public function setSubsubject(?string $subsubject): self
    {
        $this->subsubject = $subsubject;

        return $this;
    }

    public function getQuestionid(): ?string
    {
        return $this->questionid;
    }

    public function setQuestionid(string $questionid): self
    {
        $this->questionid = $questionid;

        return $this;
    }

    public function getQuestionvalue(): ?int
    {
        return $this->questionvalue;
    }

    public function setQuestionvalue(int $questionvalue): self
    {
        $this->questionvalue = $questionvalue;

        return $this;
    }

    public function getQuestioncontent(): ?string
    {
        return $this->questioncontent;
    }

    public function setQuestioncontent(string $questioncontent): self
    {
        $this->questioncontent = $questioncontent;

        return $this;
    }

    public function getImages()
    {
        return $this->images;
    }

    public function setImages($images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getCorrectanswer(): ?string
    {
        return $this->correctanswer;
    }

    public function setCorrectanswer(string $correctanswer): self
    {
        $this->correctanswer = $correctanswer;

        return $this;
    }

    public function getAanswer(): ?string
    {
        return $this->aanswer;
    }

    public function setAanswer(string $aanswer): self
    {
        $this->aanswer = $aanswer;

        return $this;
    }

    public function getAexplanation(): ?string
    {
        return $this->aexplanation;
    }

    public function setAexplanation(?string $aexplanation): self
    {
        $this->aexplanation = $aexplanation;

        return $this;
    }

    public function getBanswer(): ?string
    {
        return $this->banswer;
    }

    public function setBanswer(string $banswer): self
    {
        $this->banswer = $banswer;

        return $this;
    }

    public function getBexplanation(): ?string
    {
        return $this->bexplanation;
    }

    public function setBexplanation(?string $bexplanation): self
    {
        $this->bexplanation = $bexplanation;

        return $this;
    }

    public function getCanswer(): ?string
    {
        return $this->canswer;
    }

    public function setCanswer(?string $canswer): self
    {
        $this->canswer = $canswer;

        return $this;
    }

    public function getCexplanation(): ?string
    {
        return $this->cexplanation;
    }

    public function setCexplanation(?string $cexplanation): self
    {
        $this->cexplanation = $cexplanation;

        return $this;
    }

    public function getDanswer(): ?string
    {
        return $this->danswer;
    }

    public function setDanswer(?string $danswer): self
    {
        $this->danswer = $danswer;

        return $this;
    }

    public function getDexplanation(): ?string
    {
        return $this->dexplanation;
    }

    public function setDexplanation(?string $dexplanation): self
    {
        $this->dexplanation = $dexplanation;

        return $this;
    }
}
