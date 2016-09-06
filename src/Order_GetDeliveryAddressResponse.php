<?php

namespace Economic;

class Order_GetDeliveryAddressResponse
{

    /**
     * @var string $Order_GetDeliveryAddressResult
     */
    protected $Order_GetDeliveryAddressResult = null;

    /**
     * @param string $Order_GetDeliveryAddressResult
     */
    public function __construct($Order_GetDeliveryAddressResult)
    {
      $this->Order_GetDeliveryAddressResult = $Order_GetDeliveryAddressResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDeliveryAddressResult()
    {
      return $this->Order_GetDeliveryAddressResult;
    }

    /**
     * @param string $Order_GetDeliveryAddressResult
     * @return \Economic\Order_GetDeliveryAddressResponse
     */
    public function setOrder_GetDeliveryAddressResult($Order_GetDeliveryAddressResult)
    {
      $this->Order_GetDeliveryAddressResult = $Order_GetDeliveryAddressResult;
      return $this;
    }

}
