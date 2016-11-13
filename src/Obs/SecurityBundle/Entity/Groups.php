<?php

namespace Obs\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obs\SecurityBundle\Entity\Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity()
 */

class Groups {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=70, unique=true)
     */
    private $groupname;
    
    /**
     * @ORM\ManyToMany(targetEntity="Roles")
     *
     */
    private $roles;
    
    public function __construct()
    {
    }
    
    public function __toString()
    {
        return $this->groupname;
    } 
    
    public function getId(){
        return $this->id;
    }
    
    public function getRoles()
    {
        return $this->roles;
    }
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    
    public function getGroupname()
    {
        return $this->groupname;
    }
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;
    }
}