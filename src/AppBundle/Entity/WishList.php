<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class WishList
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $end_date;

    /**
     * @var string
     */
    private $address_drop_of;

    /**
     * @var string
     */
    private $instructions;

    /**
     * @var \DateTime
     */
    private $visitation_time;

    /**
     * @var string
     */
    private $announce_text;

    /**
     * @var int
     */
    private $year;

    /**
     * @var \AppBundle\Entity\Status
     */
    private $status;

    /**
     * @var \AppBundle\Entity\Institution
     */
    private $institution;


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
     * Set end_date
     *
     * @param \DateTime $endDate
     * @return WishList
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;

        return $this;
    }

    /**
     * Get end_date
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set address_drop_of
     *
     * @param string $addressDropOf
     * @return WishList
     */
    public function setAddressDropOf($addressDropOf)
    {
        $this->address_drop_of = $addressDropOf;

        return $this;
    }

    /**
     * Get address_drop_of
     *
     * @return string 
     */
    public function getAddressDropOf()
    {
        return $this->address_drop_of;
    }

    /**
     * Set instructions
     *
     * @param string $instructions
     * @return WishList
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get instructions
     *
     * @return string 
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set visitation_time
     *
     * @param \DateTime $visitationTime
     * @return WishList
     */
    public function setVisitationTime($visitationTime)
    {
        $this->visitation_time = $visitationTime;

        return $this;
    }

    /**
     * Get visitation_time
     *
     * @return \DateTime 
     */
    public function getVisitationTime()
    {
        return $this->visitation_time;
    }

    /**
     * Set announce_text
     *
     * @param string $announceText
     * @return WishList
     */
    public function setAnnounceText($announceText)
    {
        $this->announce_text = $announceText;

        return $this;
    }

    /**
     * Get announce_text
     *
     * @return string 
     */
    public function getAnnounceText()
    {
        return $this->announce_text;
    }

    /**
     * Set year
     *
     * @param \int $year
     * @return WishList
     */
    public function setYear(\int $year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return \int 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\Status $status
     * @return WishList
     */
    public function setStatus(\AppBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set institution
     *
     * @param \AppBundle\Entity\Institution $institution
     * @return WishList
     */
    public function setInstitution(\AppBundle\Entity\Institution $institution = null)
    {
        $this->institution = $institution;

        return $this;
    }

    /**
     * Get institution
     *
     * @return \AppBundle\Entity\Institution 
     */
    public function getInstitution()
    {
        return $this->institution;
    }
}
