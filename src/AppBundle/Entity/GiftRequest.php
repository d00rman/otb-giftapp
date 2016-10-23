<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class GiftRequest
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $recipient_name;

    /**
     * @var int
     */
    private $recipient_age;

    /**
     * @var string
     */
    private $gift_name;

    /**
     * @var int
     */
    private $total_count;

    /**
     * @var \AppBundle\Entity\WishList
     */
    private $wishlist;

    /**
     * @var \AppBundle\Entity\Status
     */
    private $status;

    /**
     * @var \AppBundle\Entity\RequestType
     */
    private $type;


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
     * Set recipient_name
     *
     * @param string $recipientName
     * @return GiftRequest
     */
    public function setRecipientName($recipientName)
    {
        $this->recipient_name = $recipientName;

        return $this;
    }

    /**
     * Get recipient_name
     *
     * @return string 
     */
    public function getRecipientName()
    {
        return $this->recipient_name;
    }

    /**
     * Set recipient_age
     *
     * @param \int $recipientAge
     * @return GiftRequest
     */
    public function setRecipientAge($recipientAge)
    {
        $this->recipient_age = $recipientAge;

        return $this;
    }

    /**
     * Get recipient_age
     *
     * @return \int 
     */
    public function getRecipientAge()
    {
        return $this->recipient_age;
    }

    /**
     * Set gift_name
     *
     * @param string $giftName
     * @return GiftRequest
     */
    public function setGiftName($giftName)
    {
        $this->gift_name = $giftName;

        return $this;
    }

    /**
     * Get gift_name
     *
     * @return string 
     */
    public function getGiftName()
    {
        return $this->gift_name;
    }

    /**
     * Set total_count
     *
     * @param \int $totalCount
     * @return GiftRequest
     */
    public function setTotalCount($totalCount)
    {
        $this->total_count = $totalCount;

        return $this;
    }

    /**
     * Get total_count
     *
     * @return \int 
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Set wishlist
     *
     * @param \AppBundle\Entity\WishList $wishlist
     * @return GiftRequest
     */
    public function setWishlist(\AppBundle\Entity\WishList $wishlist = null)
    {
        $this->wishlist = $wishlist;

        return $this;
    }

    /**
     * Get wishlist
     *
     * @return \AppBundle\Entity\WishList 
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }

    /**
     * Set status
     *
     * @param \AppBundle\Entity\Status $status
     * @return GiftRequest
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
     * Set type
     *
     * @param \AppBundle\Entity\RequestType $type
     * @return GiftRequest
     */
    public function setType(\AppBundle\Entity\RequestType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \AppBundle\Entity\RequestType 
     */
    public function getType()
    {
        return $this->type;
    }
}
