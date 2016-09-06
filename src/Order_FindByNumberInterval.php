<?php

namespace Economic;

class Order_FindByNumberInterval
{

    /**
     * @var int $minNumber
     */
    protected $minNumber = null;

    /**
     * @var int $maxNumber
     */
    protected $maxNumber = null;

    /**
     * @param int $minNumber
     * @param int $maxNumber
     */
    public function __construct($minNumber, $maxNumber)
    {
      $this->minNumber = $minNumber;
      $this->maxNumber = $maxNumber;
    }

    /**
     * @return int
     */
    public function getMinNumber()
    {
      return $this->minNumber;
    }

    /**
     * @param int $minNumber
     * @return \Economic\Order_FindByNumberInterval
     */
    public function setMinNumber($minNumber)
    {
      $this->minNumber = $minNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumber()
    {
      return $this->maxNumber;
    }

    /**
     * @param int $maxNumber
     * @return \Economic\Order_FindByNumberInterval
     */
    public function setMaxNumber($maxNumber)
    {
      $this->maxNumber = $maxNumber;
      return $this;
    }

}
