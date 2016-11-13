<?php

namespace Obs\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notes
 *
 * @ORM\Table(name="Notes")
 * @ORM\Entity
 */
class Notes
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
     * @ORM\Column(name="notes", type="string", length=150, nullable=true)
     */
    private $notes;

    /**
     * @var \Obs\CoreBundle\Entity\Publication
     *
     * @ORM\ManyToOne(targetEntity="Obs\CoreBundle\Entity\Publication", inversedBy="notes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="publication_id", referencedColumnName="id")
     * })
     */
    private $publications;

    /**
     * @var \Obs\CoreBundle\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Obs\CoreBundle\Entity\Users", inversedBy="notes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $users;



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
     * Set notes
     *
     * @param string $notes
     * @return Notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set publications
     *
     * @param \Obs\CoreBundle\Entity\Publication $publications
     * @return Notes
     */
    public function setPublications(\Obs\CoreBundle\Entity\Publication $publications = null)
    {
        $this->publications = $publications;

        return $this;
    }

    /**
     * Get publications
     *
     * @return \Obs\CoreBundle\Entity\Publication 
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * Set users
     *
     * @param \Obs\CoreBundle\Entity\Users $users
     * @return Notes
     */
    public function setUsers(\Obs\CoreBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \Obs\CoreBundle\Entity\Users 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
