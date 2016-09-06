<?php

namespace Economic;

class Order_GetDeliveryLocationResponse
{

    /**
     * @var DeliveryLocationHandle $Order_GetDeliveryLocationResult
     */
    protected $Order_GetDeliveryLocationResult = null;

    /**
     * @param DeliveryLocationHandle $Order_GetDeliveryLocationResult
     */
    public function __construct($Order_GetDeliveryLocationResult)
    {
      $this->Order_GetDeliveryLocationResult = $Order_GetDeliveryLocationResult;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getOrder_GetDeliveryLocationResult()
    {
      return $this->Order_GetDeliveryLocationResult;
    }

    /**
     * @param DeliveryLocationHandle $Order_GetDeliveryLocationResult
     * @return \Economic\Order_GetDeliveryLocationResponse
     */
    public function setOrder_GetDeliveryLocationResult($Order_GetDeliveryLocationResult)
    {
      $this->Order_GetDeliveryLocationResult = $Order_GetDeliveryLocationResult;
      return $this;
    }

}
