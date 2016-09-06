<?php

namespace Economic;

class SubscriptionLine_GetProductResponse
{

    /**
     * @var ProductHandle $SubscriptionLine_GetProductResult
     */
    protected $SubscriptionLine_GetProductResult = null;

    /**
     * @param ProductHandle $SubscriptionLine_GetProductResult
     */
    public function __construct($SubscriptionLine_GetProductResult)
    {
      $this->SubscriptionLine_GetProductResult = $SubscriptionLine_GetProductResult;
    }

    /**
     * @return ProductHandle
     */
    public function getSubscriptionLine_GetProductResult()
    {
      return $this->SubscriptionLine_GetProductResult;
    }

    /**
     * @param ProductHandle $SubscriptionLine_GetProductResult
     * @return \Economic\SubscriptionLine_GetProductResponse
     */
    public function setSubscriptionLine_GetProductResult($SubscriptionLine_GetProductResult)
    {
      $this->SubscriptionLine_GetProductResult = $SubscriptionLine_GetProductResult;
      return $this;
    }

}
