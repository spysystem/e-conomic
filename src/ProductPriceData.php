<?php

namespace Economic;

class ProductPriceData
{

    /**
     * @var ProductPriceHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Id1
     */
    protected $Id1 = null;

    /**
     * @var string $Id2
     */
    protected $Id2 = null;

    /**
     * @var ProductHandle $ProductHandle
     */
    protected $ProductHandle = null;

    /**
     * @var CurrencyHandle $CurrencyHandle
     */
    protected $CurrencyHandle = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @param float $Price
     */
    public function __construct($Price)
    {
      $this->Price = $Price;
    }

    /**
     * @return ProductPriceHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param ProductPriceHandle $Handle
     * @return \Economic\ProductPriceData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getId1()
    {
      return $this->Id1;
    }

    /**
     * @param string $Id1
     * @return \Economic\ProductPriceData
     */
    public function setId1($Id1)
    {
      $this->Id1 = $Id1;
      return $this;
    }

    /**
     * @return string
     */
    public function getId2()
    {
      return $this->Id2;
    }

    /**
     * @param string $Id2
     * @return \Economic\ProductPriceData
     */
    public function setId2($Id2)
    {
      $this->Id2 = $Id2;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->ProductHandle;
    }

    /**
     * @param ProductHandle $ProductHandle
     * @return \Economic\ProductPriceData
     */
    public function setProductHandle($ProductHandle)
    {
      $this->ProductHandle = $ProductHandle;
      return $this;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCurrencyHandle()
    {
      return $this->CurrencyHandle;
    }

    /**
     * @param CurrencyHandle $CurrencyHandle
     * @return \Economic\ProductPriceData
     */
    public function setCurrencyHandle($CurrencyHandle)
    {
      $this->CurrencyHandle = $CurrencyHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Economic\ProductPriceData
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

}
