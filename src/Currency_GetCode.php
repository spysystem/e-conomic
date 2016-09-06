<?php

namespace Economic;

class Currency_GetCode
{

    /**
     * @var CurrencyHandle $currencyHandle
     */
    protected $currencyHandle = null;

    /**
     * @param CurrencyHandle $currencyHandle
     */
    public function __construct($currencyHandle)
    {
      $this->currencyHandle = $currencyHandle;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCurrencyHandle()
    {
      return $this->currencyHandle;
    }

    /**
     * @param CurrencyHandle $currencyHandle
     * @return \Economic\Currency_GetCode
     */
    public function setCurrencyHandle($currencyHandle)
    {
      $this->currencyHandle = $currencyHandle;
      return $this;
    }

}
