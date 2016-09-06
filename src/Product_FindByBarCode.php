<?php

namespace Economic;

class Product_FindByBarCode
{

    /**
     * @var string $barCode
     */
    protected $barCode = null;

    /**
     * @param string $barCode
     */
    public function __construct($barCode)
    {
      $this->barCode = $barCode;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->barCode;
    }

    /**
     * @param string $barCode
     * @return \Economic\Product_FindByBarCode
     */
    public function setBarCode($barCode)
    {
      $this->barCode = $barCode;
      return $this;
    }

}
