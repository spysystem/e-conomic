<?php

namespace Economic;

class Order_GetTermsOfDeliveryResponse
{

    /**
     * @var string $Order_GetTermsOfDeliveryResult
     */
    protected $Order_GetTermsOfDeliveryResult = null;

    /**
     * @param string $Order_GetTermsOfDeliveryResult
     */
    public function __construct($Order_GetTermsOfDeliveryResult)
    {
      $this->Order_GetTermsOfDeliveryResult = $Order_GetTermsOfDeliveryResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetTermsOfDeliveryResult()
    {
      return $this->Order_GetTermsOfDeliveryResult;
    }

    /**
     * @param string $Order_GetTermsOfDeliveryResult
     * @return \Economic\Order_GetTermsOfDeliveryResponse
     */
    public function setOrder_GetTermsOfDeliveryResult($Order_GetTermsOfDeliveryResult)
    {
      $this->Order_GetTermsOfDeliveryResult = $Order_GetTermsOfDeliveryResult;
      return $this;
    }

}
