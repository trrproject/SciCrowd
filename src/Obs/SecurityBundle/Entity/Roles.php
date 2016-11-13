<?php

namespace Obs\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Role\RoleInterface;



/**
 * Obs\SecurityBundle\EntityRoles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity()
 */

class Roles implements RoleInterface{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=70, unique=true)
     */
    private $role;
      
    public function getId(){
        return $this->id;
    }
    
    public function getRole(){
        return $this->role;
    }
    public function setRole($role){
        $this->role = $role;
    }
    
    public function __toString()
    {
        return (string) $this->role;
    }
    

}