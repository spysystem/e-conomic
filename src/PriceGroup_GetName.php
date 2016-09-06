<?php

namespace Economic;

class PriceGroup_GetName
{

    /**
     * @var PriceGroupHandle $priceGroupHandle
     */
    protected $priceGroupHandle = null;

    /**
     * @param PriceGroupHandle $priceGroupHandle
     */
    public function __construct($priceGroupHandle)
    {
      $this->priceGroupHandle = $priceGroupHandle;
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
     * @return \Economic\PriceGroup_GetName
     */
    public function setPriceGroupHandle($priceGroupHandle)
    {
      $this->priceGroupHandle = $priceGroupHandle;
      return $this;
    }

}
