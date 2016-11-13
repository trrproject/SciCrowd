<?php

namespace Obs\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Institution
 *
 * @ORM\Table(name="Institution")
 * @ORM\Entity
 */
class Institution
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=true)
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Obs\CoreBundle\Entity\Author", mappedBy="institutions")
     */
    private $authors;

    /**
     * @var \Obs\CoreBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="Obs\CoreBundle\Entity\Country", inversedBy="institutions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $countries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Institution
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Institution
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Add authors
     *
     * @param \Obs\CoreBundle\Entity\Author $authors
     * @return Institution
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
     * Set countries
     *
     * @param \Obs\CoreBundle\Entity\Country $countries
     * @return Institution
     */
    public function setCountries(\Obs\CoreBundle\Entity\Country $countries = null)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * Get countries
     *
     * @return \Obs\CoreBundle\Entity\Country 
     */
    public function getCountries()
    {
        return $this->countries;
    }
}
