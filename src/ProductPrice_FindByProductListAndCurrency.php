<?php

namespace Economic;

class ProductPrice_FindByProductListAndCurrency
{

    /**
     * @var ArrayOfProductHandle $productHandles
     */
    protected $productHandles = null;

    /**
     * @var CurrencyHandle $currencyHandle
     */
    protected $currencyHandle = null;

    /**
     * @param ArrayOfProductHandle $productHandles
     * @param CurrencyHandle $currencyHandle
     */
    public function __construct($productHandles, $currencyHandle)
    {
      $this->productHandles = $productHandles;
      $this->currencyHandle = $currencyHandle;
    }

    /**
     * @return ArrayOfProductHandle
     */
    public function getProductHandles()
    {
      return $this->productHandles;
    }

    /**
     * @param ArrayOfProductHandle $productHandles
     * @return \Economic\ProductPrice_FindByProductListAndCurrency
     */
    public function setProductHandles($productHandles)
    {
      $this->productHandles = $productHandles;
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
     * @return \Economic\ProductPrice_FindByProductListAndCurrency
     */
    public function setCurrencyHandle($currencyHandle)
    {
      $this->currencyHandle = $currencyHandle;
      return $this;
    }

}
