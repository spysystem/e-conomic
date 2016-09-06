<?php

namespace Economic;

class SubscriptionLine_FindBySubscriptionResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $SubscriptionLine_FindBySubscriptionResult
     */
    protected $SubscriptionLine_FindBySubscriptionResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindBySubscriptionResult
     */
    public function __construct($SubscriptionLine_FindBySubscriptionResult)
    {
      $this->SubscriptionLine_FindBySubscriptionResult = $SubscriptionLine_FindBySubscriptionResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscriptionLine_FindBySubscriptionResult()
    {
      return $this->SubscriptionLine_FindBySubscriptionResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindBySubscriptionResult
     * @return \Economic\SubscriptionLine_FindBySubscriptionResponse
     */
    public function setSubscriptionLine_FindBySubscriptionResult($SubscriptionLine_FindBySubscriptionResult)
    {
      $this->SubscriptionLine_FindBySubscriptionResult = $SubscriptionLine_FindBySubscriptionResult;
      return $this;
    }

}
