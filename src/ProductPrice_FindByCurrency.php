<?php

namespace Economic;

class ProductPrice_FindByCurrency
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
     * @return \Economic\ProductPrice_FindByCurrency
     */
    public function setCurrencyHandle($currencyHandle)
    {
      $this->currencyHandle = $currencyHandle;
      return $this;
    }

}
