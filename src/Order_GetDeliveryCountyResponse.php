<?php

namespace Economic;

class Order_GetDeliveryCountyResponse
{

    /**
     * @var string $Order_GetDeliveryCountyResult
     */
    protected $Order_GetDeliveryCountyResult = null;

    /**
     * @param string $Order_GetDeliveryCountyResult
     */
    public function __construct($Order_GetDeliveryCountyResult)
    {
      $this->Order_GetDeliveryCountyResult = $Order_GetDeliveryCountyResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDeliveryCountyResult()
    {
      return $this->Order_GetDeliveryCountyResult;
    }

    /**
     * @param string $Order_GetDeliveryCountyResult
     * @return \Economic\Order_GetDeliveryCountyResponse
     */
    public function setOrder_GetDeliveryCountyResult($Order_GetDeliveryCountyResult)
    {
      $this->Order_GetDeliveryCountyResult = $Order_GetDeliveryCountyResult;
      return $this;
    }

}
