<?php

namespace Economic;

class SubscriptionLine_CreateResponse
{

    /**
     * @var SubscriptionLineHandle $SubscriptionLine_CreateResult
     */
    protected $SubscriptionLine_CreateResult = null;

    /**
     * @param SubscriptionLineHandle $SubscriptionLine_CreateResult
     */
    public function __construct($SubscriptionLine_CreateResult)
    {
      $this->SubscriptionLine_CreateResult = $SubscriptionLine_CreateResult;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getSubscriptionLine_CreateResult()
    {
      return $this->SubscriptionLine_CreateResult;
    }

    /**
     * @param SubscriptionLineHandle $SubscriptionLine_CreateResult
     * @return \Economic\SubscriptionLine_CreateResponse
     */
    public function setSubscriptionLine_CreateResult($SubscriptionLine_CreateResult)
    {
      $this->SubscriptionLine_CreateResult = $SubscriptionLine_CreateResult;
      return $this;
    }

}
