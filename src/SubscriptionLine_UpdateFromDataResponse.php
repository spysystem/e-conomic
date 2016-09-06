<?php

namespace Economic;

class SubscriptionLine_UpdateFromDataResponse
{

    /**
     * @var SubscriptionLineHandle $SubscriptionLine_UpdateFromDataResult
     */
    protected $SubscriptionLine_UpdateFromDataResult = null;

    /**
     * @param SubscriptionLineHandle $SubscriptionLine_UpdateFromDataResult
     */
    public function __construct($SubscriptionLine_UpdateFromDataResult)
    {
      $this->SubscriptionLine_UpdateFromDataResult = $SubscriptionLine_UpdateFromDataResult;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getSubscriptionLine_UpdateFromDataResult()
    {
      return $this->SubscriptionLine_UpdateFromDataResult;
    }

    /**
     * @param SubscriptionLineHandle $SubscriptionLine_UpdateFromDataResult
     * @return \Economic\SubscriptionLine_UpdateFromDataResponse
     */
    public function setSubscriptionLine_UpdateFromDataResult($SubscriptionLine_UpdateFromDataResult)
    {
      $this->SubscriptionLine_UpdateFromDataResult = $SubscriptionLine_UpdateFromDataResult;
      return $this;
    }

}
