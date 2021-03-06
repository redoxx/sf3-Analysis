<?php

namespace Medical\AnalysisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analyse
 *
 * @ORM\Table(name="analyse")
 * @ORM\Entity(repositoryClass="Medical\AnalysisBundle\Repository\AnalyseRepository")
 */
class Analyse
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rdv", type="datetimetz")
     */
    private $dateRdv;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="referent_doctor", type="string", length=255, nullable=true)
     */
    private $referentDoctor;

    /**
    * @ORM\Column(name="published", type="boolean")
    */
    private $published = true;


    /**
    * @ORM\OneToOne(targetEntity="Medical\AnalysisBundle\Entity\Laboratery", cascade={"persist"})
    */
    private $laboratery;

    /**
    * @ORM\ManyToMany(targetEntity="Medical\AnalysisBundle\Entity\Result", cascade={"persist"})
    */
    private $results;

    /**
    * @ORM\ManyToOne(targetEntity="Medical\AnalysisBundle\Entity\Patient", cascade={"persist"})
    */
    private $patient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->results = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Analyse
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set dateRdv
     *
     * @param \DateTime $dateRdv
     *
     * @return Analyse
     */
    public function setDateRdv($dateRdv)
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    /**
     * Get dateRdv
     *
     * @return \DateTime
     */
    public function getDateRdv()
    {
        return $this->dateRdv;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Analyse
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Analyse
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set referentDoctor
     *
     * @param string $referentDoctor
     *
     * @return Analyse
     */
    public function setReferentDoctor($referentDoctor)
    {
        $this->referentDoctor = $referentDoctor;

        return $this;
    }

    /**
     * Get referentDoctor
     *
     * @return string
     */
    public function getReferentDoctor()
    {
        return $this->referentDoctor;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Analyse
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set laboratery
     *
     * @param \Medical\AnalysisBundle\Entity\Laboratery $laboratery
     *
     * @return Analyse
     */
    public function setLaboratery(\Medical\AnalysisBundle\Entity\Laboratery $laboratery = null)
    {
        $this->laboratery = $laboratery;
    }

    /**
     * Get laboratery
     *
     * @return \Medical\AnalysisBundle\Entity\Laboratery
     */
    public function getLaboratery()
    {
        return $this->laboratery;
    }
    
    /**
     * Add result
     *
     * @param \Medical\AnalysisBundle\Entity\Result $result
     *
     * @return Analyse
     */
    public function addResult(\Medical\AnalysisBundle\Entity\Result $result)
    {
        $this->results[] = $result;

        return $this;
    }

    /**
     * Remove result
     *
     * @param \Medical\AnalysisBundle\Entity\Result $result
     */
    public function removeResult(\Medical\AnalysisBundle\Entity\Result $result)
    {
        $this->results->removeElement($result);
    }

    /**
     * Get results
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Set patient
     *
     * @param \Medical\AnalysisBundle\Entity\Patient $patient
     *
     * @return Analyse
     */
    public function setPatient(\Medical\AnalysisBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \Medical\AnalysisBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }
}
