<?php

namespace Obs\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Common\Collections\ArrayCollection;


/** 
* Test\OverSkyBundle\Entity\Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Obs\SecurityBundle\Entity\UsersRepository")
 */

class Users implements UserInterface, \Serializable{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;
    
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;
    
    /**
     * @ORM\Column(type="string", length=140)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=140, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive; 
    
    /**
     * @ORM\ManyToMany(targetEntity="Roles")
     *
     */
    private $revogue;

    /**
     * @ORM\ManyToMany(targetEntity="Groups")
     *
     */
    private $groups;

    public function __toString()
    {
        return $this->name;
    } 
    
    public function __construct() {
        $this->roles = new ArrayCollection();
        $this->groups = new ArrayCollection();
        $this->isActive = false;
        $this->salt = md5(uniqid(null, true));
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRevogue()
    {
        return $this->revogue;
    }
    public function setRevogue($revogue)
    {
        $this->revogue = $revogue;
    }
    public function getRoles() {
       
        $grupos = new Groups();
        $groupnames = array();
        
        $grupos = $this->getGroups();
        foreach ($grupos as $group) {
            $groupnames[] = $group->getGroupname();
        }
         
        foreach ($this->getGroups() as $group) {
            foreach ($group->getRoles() as $role) {
                $groupRoles[] = $role;
            }
        }
        return array_merge($groupnames ,array_unique(array_diff($groupRoles, $this->revogue->toArray())));
         
        
    }
    
    public function getGroups()
    {
        return $this->groups;
    }

    public function setGroups($groups)
    {
        $this->groups = $groups;
    }
    
    public function isInGroup($findgroup){
        foreach ($this->getGroups() as $groups) {
            if ($groups == $findgroup){
                return true;
            }
        }
        return false;
        
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }    
    
    public function getSalt()
    {
        return $this->salt;
    }
    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }
    
    public function getPassword()
    {
        return $this->password;
    }    
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }  
    
    public function getIsActive()
    {
        return $this->isActive;
    }  
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }   
    
    public function eraseCredentials() {
        
    }

    public function serialize() {
        return serialize(array(
            $this->id,
        ));        
    }

    public function unserialize($serialized) {
        list (
            $this->id,
        ) = unserialize($serialized);
    }
}