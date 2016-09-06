<?php

namespace Economic;

class Entry_GetAmountResponse
{

    /**
     * @var float $Entry_GetAmountResult
     */
    protected $Entry_GetAmountResult = null;

    /**
     * @param float $Entry_GetAmountResult
     */
    public function __construct($Entry_GetAmountResult)
    {
      $this->Entry_GetAmountResult = $Entry_GetAmountResult;
    }

    /**
     * @return float
     */
    public function getEntry_GetAmountResult()
    {
      return $this->Entry_GetAmountResult;
    }

    /**
     * @param float $Entry_GetAmountResult
     * @return \Economic\Entry_GetAmountResponse
     */
    public function setEntry_GetAmountResult($Entry_GetAmountResult)
    {
      $this->Entry_GetAmountResult = $Entry_GetAmountResult;
      return $this;
    }

}
