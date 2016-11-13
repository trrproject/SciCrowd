<?php

namespace Obs\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IsnType
 *
 * @ORM\Table(name="IsnType")
 * @ORM\Entity
 */
class IsnType
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Obs\CoreBundle\Entity\Publication", mappedBy="isntypes")
     */
    private $publications;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->publications = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return IsnType
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
     * Add publications
     *
     * @param \Obs\CoreBundle\Entity\Publication $publications
     * @return IsnType
     */
    public function addPublication(\Obs\CoreBundle\Entity\Publication $publications)
    {
        $this->publications[] = $publications;

        return $this;
    }

    /**
     * Remove publications
     *
     * @param \Obs\CoreBundle\Entity\Publication $publications
     */
    public function removePublication(\Obs\CoreBundle\Entity\Publication $publications)
    {
        $this->publications->removeElement($publications);
    }

    /**
     * Get publications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPublications()
    {
        return $this->publications;
    }
}
