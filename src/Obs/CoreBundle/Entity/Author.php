<?php

namespace Obs\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 *
 * @ORM\Table(name="Author")
 * @ORM\Entity
 */
class Author
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
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=50, nullable=true)
     */
    private $contact;

    /**
     * @var \Obs\CoreBundle\Entity\Institution
     *
     * @ORM\ManyToOne(targetEntity="Obs\CoreBundle\Entity\Institution", inversedBy="authors")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="institution_id", referencedColumnName="id")
     * })
     */
    private $institutions;



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
     * @return Author
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
     * Set email
     *
     * @param string $email
     * @return Author
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contact
     *
     * @param string $contact
     * @return Author
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string 
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set institutions
     *
     * @param \Obs\CoreBundle\Entity\Institution $institutions
     * @return Author
     */
    public function setInstitutions(\Obs\CoreBundle\Entity\Institution $institutions = null)
    {
        $this->institutions = $institutions;

        return $this;
    }

    /**
     * Get institutions
     *
     * @return \Obs\CoreBundle\Entity\Institution 
     */
    public function getInstitutions()
    {
        return $this->institutions;
    }
}
