<?php

namespace Economic;

class Currency_FindByCodeResponse
{

    /**
     * @var CurrencyHandle $Currency_FindByCodeResult
     */
    protected $Currency_FindByCodeResult = null;

    /**
     * @param CurrencyHandle $Currency_FindByCodeResult
     */
    public function __construct($Currency_FindByCodeResult)
    {
      $this->Currency_FindByCodeResult = $Currency_FindByCodeResult;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCurrency_FindByCodeResult()
    {
      return $this->Currency_FindByCodeResult;
    }

    /**
     * @param CurrencyHandle $Currency_FindByCodeResult
     * @return \Economic\Currency_FindByCodeResponse
     */
    public function setCurrency_FindByCodeResult($Currency_FindByCodeResult)
    {
      $this->Currency_FindByCodeResult = $Currency_FindByCodeResult;
      return $this;
    }

}
