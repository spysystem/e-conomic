<?php

namespace Economic;

class Entry_GetQuantity2Response
{

    /**
     * @var float $Entry_GetQuantity2Result
     */
    protected $Entry_GetQuantity2Result = null;

    /**
     * @param float $Entry_GetQuantity2Result
     */
    public function __construct($Entry_GetQuantity2Result)
    {
      $this->Entry_GetQuantity2Result = $Entry_GetQuantity2Result;
    }

    /**
     * @return float
     */
    public function getEntry_GetQuantity2Result()
    {
      return $this->Entry_GetQuantity2Result;
    }

    /**
     * @param float $Entry_GetQuantity2Result
     * @return \Economic\Entry_GetQuantity2Response
     */
    public function setEntry_GetQuantity2Result($Entry_GetQuantity2Result)
    {
      $this->Entry_GetQuantity2Result = $Entry_GetQuantity2Result;
      return $this;
    }

}
