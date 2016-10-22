<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Donation
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var int
     */
    private $count;

    /**
     * @var \AppBundle\Entity\User
     */
    private $user;

    /**
     * @var \AppBundle\Entity\GiftRequest
     */
    private $gift_request;


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
     * Set count
     *
     * @param \int $count
     * @return Donation
     */
    public function setCount(\int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return \int 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     * @return Donation
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set gift_request
     *
     * @param \AppBundle\Entity\GiftRequest $giftRequest
     * @return Donation
     */
    public function setGiftRequest(\AppBundle\Entity\GiftRequest $giftRequest = null)
    {
        $this->gift_request = $giftRequest;

        return $this;
    }

    /**
     * Get gift_request
     *
     * @return \AppBundle\Entity\GiftRequest 
     */
    public function getGiftRequest()
    {
        return $this->gift_request;
    }
}
