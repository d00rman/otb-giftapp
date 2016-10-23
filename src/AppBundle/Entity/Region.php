<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Region
{
  private $id;
  private $name;

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
   * @return Region
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
     * @var string
     */
    private $svg_id;


    /**
     * Set svg_id
     *
     * @param string $svgId
     * @return Region
     */
    public function setSvgId($svgId)
    {
        $this->svg_id = $svgId;

        return $this;
    }

    /**
     * Get svg_id
     *
     * @return string 
     */
    public function getSvgId()
    {
        return $this->svg_id;
    }
}
