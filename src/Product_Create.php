<?php

namespace Economic;

class Product_Create
{

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var ProductGroupHandle $productGroupHandle
     */
    protected $productGroupHandle = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $number
     * @param ProductGroupHandle $productGroupHandle
     * @param string $name
     */
    public function __construct($number, $productGroupHandle, $name)
    {
      $this->number = $number;
      $this->productGroupHandle = $productGroupHandle;
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \Economic\Product_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroupHandle()
    {
      return $this->productGroupHandle;
    }

    /**
     * @param ProductGroupHandle $productGroupHandle
     * @return \Economic\Product_Create
     */
    public function setProductGroupHandle($productGroupHandle)
    {
      $this->productGroupHandle = $productGroupHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\Product_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
