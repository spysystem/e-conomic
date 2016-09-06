<?php

namespace Economic;

class Order_GetDeliveryPostalCodeResponse
{

    /**
     * @var string $Order_GetDeliveryPostalCodeResult
     */
    protected $Order_GetDeliveryPostalCodeResult = null;

    /**
     * @param string $Order_GetDeliveryPostalCodeResult
     */
    public function __construct($Order_GetDeliveryPostalCodeResult)
    {
      $this->Order_GetDeliveryPostalCodeResult = $Order_GetDeliveryPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDeliveryPostalCodeResult()
    {
      return $this->Order_GetDeliveryPostalCodeResult;
    }

    /**
     * @param string $Order_GetDeliveryPostalCodeResult
     * @return \Economic\Order_GetDeliveryPostalCodeResponse
     */
    public function setOrder_GetDeliveryPostalCodeResult($Order_GetDeliveryPostalCodeResult)
    {
      $this->Order_GetDeliveryPostalCodeResult = $Order_GetDeliveryPostalCodeResult;
      return $this;
    }

}
