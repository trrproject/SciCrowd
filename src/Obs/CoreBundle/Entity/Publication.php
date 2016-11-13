<?php

namespace Obs\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table(name="Publication")
 * @ORM\Entity
 */
class Publication
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="year", type="date", nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="volume", type="string", length=10, nullable=true)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=10, nullable=true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="pages", type="string", length=10, nullable=true)
     */
    private $pages;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=10, nullable=true)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=50, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="doi", type="string", length=50, nullable=true)
     */
    private $doi;

    /**
     * @var boolean
     *
     * @ORM\Column(name="approved_flag", type="boolean", nullable=false)
     */
    private $approvedFlag;

    /**
     * @var string
     *
     * @ORM\Column(name="ISN", type="string", length=50, nullable=true)
     */
    private $ISN;

    /**
     * @var \Obs\CoreBundle\Entity\TypePub
     *
     * @ORM\ManyToOne(targetEntity="Obs\CoreBundle\Entity\TypePub", inversedBy="publications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typepub_id", referencedColumnName="id")
     * })
     */
    private $typepubs;

    /**
     * @var \Obs\CoreBundle\Entity\IsnType
     *
     * @ORM\ManyToOne(targetEntity="Obs\CoreBundle\Entity\IsnType", inversedBy="publications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="isntype_id", referencedColumnName="id")
     * })
     */
    private $isntypes;

    /**
     * @var \Obs\CoreBundle\Entity\Publisher
     *
     * @ORM\ManyToOne(targetEntity="Obs\CoreBundle\Entity\Publisher", inversedBy="publications")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publisher_id", referencedColumnName="id")
     * })
     */
    private $publishers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Obs\CoreBundle\Entity\Author")
     * @ORM\JoinTable(name="publications_authors",
     *   joinColumns={
     *     @ORM\JoinColumn(name="publication_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     *   }
     * )
     */
    private $authors;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Obs\CoreBundle\Entity\Editor")
     * @ORM\JoinTable(name="publications_editor",
     *   joinColumns={
     *     @ORM\JoinColumn(name="publication_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="editor_id", referencedColumnName="id")
     *   }
     * )
     */
    private $editors;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
        $this->editors = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Publication
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
     * Set year
     *
     * @param \DateTime $year
     * @return Publication
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \DateTime 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set volume
     *
     * @param string $volume
     * @return Publication
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string 
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Publication
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set pages
     *
     * @param string $pages
     * @return Publication
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return string 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set edition
     *
     * @param string $edition
     * @return Publication
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Publication
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set doi
     *
     * @param string $doi
     * @return Publication
     */
    public function setDoi($doi)
    {
        $this->doi = $doi;

        return $this;
    }

    /**
     * Get doi
     *
     * @return string 
     */
    public function getDoi()
    {
        return $this->doi;
    }

    /**
     * Set approvedFlag
     *
     * @param boolean $approvedFlag
     * @return Publication
     */
    public function setApprovedFlag($approvedFlag)
    {
        $this->approvedFlag = $approvedFlag;

        return $this;
    }

    /**
     * Get approvedFlag
     *
     * @return boolean 
     */
    public function getApprovedFlag()
    {
        return $this->approvedFlag;
    }

    /**
     * Set ISN
     *
     * @param string $iSN
     * @return Publication
     */
    public function setISN($iSN)
    {
        $this->ISN = $iSN;

        return $this;
    }

    /**
     * Get ISN
     *
     * @return string 
     */
    public function getISN()
    {
        return $this->ISN;
    }

    /**
     * Set typepubs
     *
     * @param \Obs\CoreBundle\Entity\TypePub $typepubs
     * @return Publication
     */
    public function setTypepubs(\Obs\CoreBundle\Entity\TypePub $typepubs = null)
    {
        $this->typepubs = $typepubs;

        return $this;
    }

    /**
     * Get typepubs
     *
     * @return \Obs\CoreBundle\Entity\TypePub 
     */
    public function getTypepubs()
    {
        return $this->typepubs;
    }

    /**
     * Set isntypes
     *
     * @param \Obs\CoreBundle\Entity\IsnType $isntypes
     * @return Publication
     */
    public function setIsntypes(\Obs\CoreBundle\Entity\IsnType $isntypes = null)
    {
        $this->isntypes = $isntypes;

        return $this;
    }

    /**
     * Get isntypes
     *
     * @return \Obs\CoreBundle\Entity\IsnType 
     */
    public function getIsntypes()
    {
        return $this->isntypes;
    }

    /**
     * Set publishers
     *
     * @param \Obs\CoreBundle\Entity\Publisher $publishers
     * @return Publication
     */
    public function setPublishers(\Obs\CoreBundle\Entity\Publisher $publishers = null)
    {
        $this->publishers = $publishers;

        return $this;
    }

    /**
     * Get publishers
     *
     * @return \Obs\CoreBundle\Entity\Publisher 
     */
    public function getPublishers()
    {
        return $this->publishers;
    }

    /**
     * Add authors
     *
     * @param \Obs\CoreBundle\Entity\Author $authors
     * @return Publication
     */
    public function addAuthor(\Obs\CoreBundle\Entity\Author $authors)
    {
        $this->authors[] = $authors;

        return $this;
    }

    /**
     * Remove authors
     *
     * @param \Obs\CoreBundle\Entity\Author $authors
     */
    public function removeAuthor(\Obs\CoreBundle\Entity\Author $authors)
    {
        $this->authors->removeElement($authors);
    }

    /**
     * Get authors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Add editors
     *
     * @param \Obs\CoreBundle\Entity\Editor $editors
     * @return Publication
     */
    public function addEditor(\Obs\CoreBundle\Entity\Editor $editors)
    {
        $this->editors[] = $editors;

        return $this;
    }

    /**
     * Remove editors
     *
     * @param \Obs\CoreBundle\Entity\Editor $editors
     */
    public function removeEditor(\Obs\CoreBundle\Entity\Editor $editors)
    {
        $this->editors->removeElement($editors);
    }

    /**
     * Get editors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEditors()
    {
        return $this->editors;
    }
}
