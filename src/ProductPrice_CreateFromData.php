<?php

namespace Economic;

class ProductPrice_CreateFromData
{

    /**
     * @var ProductPriceData $data
     */
    protected $data = null;

    /**
     * @param ProductPriceData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return ProductPriceData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param ProductPriceData $data
     * @return \Economic\ProductPrice_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
