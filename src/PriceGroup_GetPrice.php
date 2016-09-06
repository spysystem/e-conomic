<?php

namespace Economic;

class PriceGroup_GetPrice
{

    /**
     * @var PriceGroupHandle $priceGroupHandle
     */
    protected $priceGroupHandle = null;

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @param PriceGroupHandle $priceGroupHandle
     * @param ProductHandle $productHandle
     */
    public function __construct($priceGroupHandle, $productHandle)
    {
      $this->priceGroupHandle = $priceGroupHandle;
      $this->productHandle = $productHandle;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getPriceGroupHandle()
    {
      return $this->priceGroupHandle;
    }

    /**
     * @param PriceGroupHandle $priceGroupHandle
     * @return \Economic\PriceGroup_GetPrice
     */
    public function setPriceGroupHandle($priceGroupHandle)
    {
      $this->priceGroupHandle = $priceGroupHandle;
      return $this;
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
     * @return \Economic\PriceGroup_GetPrice
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

}
