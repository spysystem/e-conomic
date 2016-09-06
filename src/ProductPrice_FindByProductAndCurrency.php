<?php

namespace Economic;

class ProductPrice_FindByProductAndCurrency
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @var CurrencyHandle $currencyHandle
     */
    protected $currencyHandle = null;

    /**
     * @param ProductHandle $productHandle
     * @param CurrencyHandle $currencyHandle
     */
    public function __construct($productHandle, $currencyHandle)
    {
      $this->productHandle = $productHandle;
      $this->currencyHandle = $currencyHandle;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->productHandle;
    }

    /**
     * @param ProductHandle $productHandle
     * @return \Economic\ProductPrice_FindByProductAndCurrency
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
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
     * @return \Economic\ProductPrice_FindByProductAndCurrency
     */
    public function setCurrencyHandle($currencyHandle)
    {
      $this->currencyHandle = $currencyHandle;
      return $this;
    }

}
