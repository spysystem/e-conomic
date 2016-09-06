<?php

namespace Economic;

class Order_GetDeliveryCountryResponse
{

    /**
     * @var string $Order_GetDeliveryCountryResult
     */
    protected $Order_GetDeliveryCountryResult = null;

    /**
     * @param string $Order_GetDeliveryCountryResult
     */
    public function __construct($Order_GetDeliveryCountryResult)
    {
      $this->Order_GetDeliveryCountryResult = $Order_GetDeliveryCountryResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDeliveryCountryResult()
    {
      return $this->Order_GetDeliveryCountryResult;
    }

    /**
     * @param string $Order_GetDeliveryCountryResult
     * @return \Economic\Order_GetDeliveryCountryResponse
     */
    public function setOrder_GetDeliveryCountryResult($Order_GetDeliveryCountryResult)
    {
      $this->Order_GetDeliveryCountryResult = $Order_GetDeliveryCountryResult;
      return $this;
    }

}
