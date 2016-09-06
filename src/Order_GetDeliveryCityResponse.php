<?php

namespace Economic;

class Order_GetDeliveryCityResponse
{

    /**
     * @var string $Order_GetDeliveryCityResult
     */
    protected $Order_GetDeliveryCityResult = null;

    /**
     * @param string $Order_GetDeliveryCityResult
     */
    public function __construct($Order_GetDeliveryCityResult)
    {
      $this->Order_GetDeliveryCityResult = $Order_GetDeliveryCityResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetDeliveryCityResult()
    {
      return $this->Order_GetDeliveryCityResult;
    }

    /**
     * @param string $Order_GetDeliveryCityResult
     * @return \Economic\Order_GetDeliveryCityResponse
     */
    public function setOrder_GetDeliveryCityResult($Order_GetDeliveryCityResult)
    {
      $this->Order_GetDeliveryCityResult = $Order_GetDeliveryCityResult;
      return $this;
    }

}
