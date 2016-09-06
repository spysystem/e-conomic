<?php

namespace Economic;

class SubscriptionLine_GetSubscriptionResponse
{

    /**
     * @var SubscriptionHandle $SubscriptionLine_GetSubscriptionResult
     */
    protected $SubscriptionLine_GetSubscriptionResult = null;

    /**
     * @param SubscriptionHandle $SubscriptionLine_GetSubscriptionResult
     */
    public function __construct($SubscriptionLine_GetSubscriptionResult)
    {
      $this->SubscriptionLine_GetSubscriptionResult = $SubscriptionLine_GetSubscriptionResult;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscriptionLine_GetSubscriptionResult()
    {
      return $this->SubscriptionLine_GetSubscriptionResult;
    }

    /**
     * @param SubscriptionHandle $SubscriptionLine_GetSubscriptionResult
     * @return \Economic\SubscriptionLine_GetSubscriptionResponse
     */
    public function setSubscriptionLine_GetSubscriptionResult($SubscriptionLine_GetSubscriptionResult)
    {
      $this->SubscriptionLine_GetSubscriptionResult = $SubscriptionLine_GetSubscriptionResult;
      return $this;
    }

}
