<?php

namespace Economic;

class Product_UpdateFromData
{

    /**
     * @var ProductData $data
     */
    protected $data = null;

    /**
     * @param ProductData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return ProductData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param ProductData $data
     * @return \Economic\Product_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
