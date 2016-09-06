<?php

namespace Economic;

class ProductPrice_Create
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
     * @var float $price
     */
    protected $price = null;

    /**
     * @param ProductHandle $productHandle
     * @param CurrencyHandle $currencyHandle
     * @param float $price
     */
    public function __construct($productHandle, $currencyHandle, $price)
    {
      $this->productHandle = $productHandle;
      $this->currencyHandle = $currencyHandle;
      $this->price = $price;
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
     * @return \Economic\ProductPrice_Create
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
     * @return \Economic\ProductPrice_Create
     */
    public function setCurrencyHandle($currencyHandle)
    {
      $this->currencyHandle = $currencyHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \Economic\ProductPrice_Create
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

}
