<?php

namespace Economic;

class Product_CreateFromData
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
     * @return \Economic\Product_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
