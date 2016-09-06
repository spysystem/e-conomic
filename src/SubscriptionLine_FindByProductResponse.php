<?php

namespace Economic;

class SubscriptionLine_FindByProductResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $SubscriptionLine_FindByProductResult
     */
    protected $SubscriptionLine_FindByProductResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindByProductResult
     */
    public function __construct($SubscriptionLine_FindByProductResult)
    {
      $this->SubscriptionLine_FindByProductResult = $SubscriptionLine_FindByProductResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscriptionLine_FindByProductResult()
    {
      return $this->SubscriptionLine_FindByProductResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindByProductResult
     * @return \Economic\SubscriptionLine_FindByProductResponse
     */
    public function setSubscriptionLine_FindByProductResult($SubscriptionLine_FindByProductResult)
    {
      $this->SubscriptionLine_FindByProductResult = $SubscriptionLine_FindByProductResult;
      return $this;
    }

}
