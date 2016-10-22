<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $oauth_client_id;

    /**
     * @var string
     */
    private $oauth_client_secret;

    /**
     * @var string
     */
    private $oauth_code;

    /**
     * @var \AppBundle\Entity\Role
     */
    private $role;


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
     * @return User
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
     * @return User
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
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set oauth_client_id
     *
     * @param string $oauthClientId
     * @return User
     */
    public function setOauthClientId($oauthClientId)
    {
        $this->oauth_client_id = $oauthClientId;

        return $this;
    }

    /**
     * Get oauth_client_id
     *
     * @return string 
     */
    public function getOauthClientId()
    {
        return $this->oauth_client_id;
    }

    /**
     * Set oauth_client_secret
     *
     * @param string $oauthClientSecret
     * @return User
     */
    public function setOauthClientSecret($oauthClientSecret)
    {
        $this->oauth_client_secret = $oauthClientSecret;

        return $this;
    }

    /**
     * Get oauth_client_secret
     *
     * @return string 
     */
    public function getOauthClientSecret()
    {
        return $this->oauth_client_secret;
    }

    /**
     * Set oauth_code
     *
     * @param string $oauthCode
     * @return User
     */
    public function setOauthCode($oauthCode)
    {
        $this->oauth_code = $oauthCode;

        return $this;
    }

    /**
     * Get oauth_code
     *
     * @return string 
     */
    public function getOauthCode()
    {
        return $this->oauth_code;
    }

    /**
     * Set role
     *
     * @param \AppBundle\Entity\Role $role
     * @return User
     */
    public function setRole(\AppBundle\Entity\Role $role = null)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return \AppBundle\Entity\Role 
     */
    public function getRole()
    {
        return $this->role;
    }
}
