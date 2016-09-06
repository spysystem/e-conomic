<?php

namespace Economic;

class PriceGroup_SetName
{

    /**
     * @var PriceGroupHandle $priceGroupHandle
     */
    protected $priceGroupHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param PriceGroupHandle $priceGroupHandle
     * @param string $value
     */
    public function __construct($priceGroupHandle, $value)
    {
      $this->priceGroupHandle = $priceGroupHandle;
      $this->value = $value;
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
     * @return \Economic\PriceGroup_SetName
     */
    public function setPriceGroupHandle($priceGroupHandle)
    {
      $this->priceGroupHandle = $priceGroupHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\PriceGroup_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
