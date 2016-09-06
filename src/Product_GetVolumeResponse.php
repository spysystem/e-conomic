<?php

namespace Economic;

class Product_GetVolumeResponse
{

    /**
     * @var float $Product_GetVolumeResult
     */
    protected $Product_GetVolumeResult = null;

    /**
     * @param float $Product_GetVolumeResult
     */
    public function __construct($Product_GetVolumeResult)
    {
      $this->Product_GetVolumeResult = $Product_GetVolumeResult;
    }

    /**
     * @return float
     */
    public function getProduct_GetVolumeResult()
    {
      return $this->Product_GetVolumeResult;
    }

    /**
     * @param float $Product_GetVolumeResult
     * @return \Economic\Product_GetVolumeResponse
     */
    public function setProduct_GetVolumeResult($Product_GetVolumeResult)
    {
      $this->Product_GetVolumeResult = $Product_GetVolumeResult;
      return $this;
    }

}
