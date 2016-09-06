<?php

namespace Economic;

class Entry_GetQuantity1Response
{

    /**
     * @var float $Entry_GetQuantity1Result
     */
    protected $Entry_GetQuantity1Result = null;

    /**
     * @param float $Entry_GetQuantity1Result
     */
    public function __construct($Entry_GetQuantity1Result)
    {
      $this->Entry_GetQuantity1Result = $Entry_GetQuantity1Result;
    }

    /**
     * @return float
     */
    public function getEntry_GetQuantity1Result()
    {
      return $this->Entry_GetQuantity1Result;
    }

    /**
     * @param float $Entry_GetQuantity1Result
     * @return \Economic\Entry_GetQuantity1Response
     */
    public function setEntry_GetQuantity1Result($Entry_GetQuantity1Result)
    {
      $this->Entry_GetQuantity1Result = $Entry_GetQuantity1Result;
      return $this;
    }

}
