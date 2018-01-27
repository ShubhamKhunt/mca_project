<?php

namespace SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User_master
 *
 * @ORM\Table(name="user_master")
 * @ORM\Entity(repositoryClass="SiteBundle\Repository\User_masterRepository")
 */
class User_master
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=10)
     */
    public $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=10)
     */
    public $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=30, unique=true)
     */
    public $email;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=20, unique=true)
     */
    public $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=12)
     */
    public $password;
	
	/**
     * @var string
     *
     * @ORM\Column(name="img_url", type="string", length=50)
     */
    public $img_url;
	
    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="gender", type="integer", nullable=true)
     */
    public $gender;

    /**
     * @var int
     *
     * @ORM\Column(name="contact", type="integer")
     */
    public $contact;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=true)
     */
    public $address;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    public $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_remove", type="boolean", nullable=true)
     */
    public $isRemove;

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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User_master
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User_master
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User_master
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
     * Set username
     *
     * @param string $username
     *
     * @return User_master
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User_master
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
	
	/**
     * Set img_url
     *
     * @param string $img_url
     *
     * @return User_master
     */
    public function setImg_url($img_url)
    {
        $this->img_url = $img_url;

        return $this;
    }

    /**
     * Get img_url
     *
     * @return string
     */
    public function getImg_url()
    {
        return $this->img_url;
    }
	
    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User_master
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set gender
     *
     * @param integer $gender
     *
     * @return User_master
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set contact
     *
     * @param integer $contact
     *
     * @return User_master
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return int
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User_master
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User_master
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isRemove
     *
     * @param boolean $isRemove
     *
     * @return User_master
     */
    public function setIsRemove($isRemove)
    {
        $this->isRemove = $isRemove;

        return $this;
    }

    /**
     * Get isRemove
     *
     * @return bool
     */
    public function getIsRemove()
    {
        return $this->isRemove;
    }
}

