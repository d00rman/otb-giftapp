<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Institution
{
  private $id;
  private $name;
  private $address;
  private $type_id;
  private $region_id;

    /**
     * @var \AppBundle\Entity\InstitutionType
     */
    private $type;

    /**
     * @var \AppBundle\Entity\Region
     */
    private $region;


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
     * Set type
     *
     * @param \AppBundle\Entity\InstitutionType $type
     * @return Institution
     */
    public function setType(\AppBundle\Entity\InstitutionType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\InstitutionType 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set region
     *
     * @param \AppBundle\Entity\Region $region
     * @return Institution
     */
    public function setRegion(\AppBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \AppBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }
}
