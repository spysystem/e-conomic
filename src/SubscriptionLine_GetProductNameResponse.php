<?php

namespace Economic;

class SubscriptionLine_GetProductNameResponse
{

    /**
     * @var string $SubscriptionLine_GetProductNameResult
     */
    protected $SubscriptionLine_GetProductNameResult = null;

    /**
     * @param string $SubscriptionLine_GetProductNameResult
     */
    public function __construct($SubscriptionLine_GetProductNameResult)
    {
      $this->SubscriptionLine_GetProductNameResult = $SubscriptionLine_GetProductNameResult;
    }

    /**
     * @return string
     */
    public function getSubscriptionLine_GetProductNameResult()
    {
      return $this->SubscriptionLine_GetProductNameResult;
    }

    /**
     * @param string $SubscriptionLine_GetProductNameResult
     * @return \Economic\SubscriptionLine_GetProductNameResponse
     */
    public function setSubscriptionLine_GetProductNameResult($SubscriptionLine_GetProductNameResult)
    {
      $this->SubscriptionLine_GetProductNameResult = $SubscriptionLine_GetProductNameResult;
      return $this;
    }

}
