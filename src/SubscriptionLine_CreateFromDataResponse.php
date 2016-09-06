<?php

namespace Economic;

class SubscriptionLine_CreateFromDataResponse
{

    /**
     * @var SubscriptionLineHandle $SubscriptionLine_CreateFromDataResult
     */
    protected $SubscriptionLine_CreateFromDataResult = null;

    /**
     * @param SubscriptionLineHandle $SubscriptionLine_CreateFromDataResult
     */
    public function __construct($SubscriptionLine_CreateFromDataResult)
    {
      $this->SubscriptionLine_CreateFromDataResult = $SubscriptionLine_CreateFromDataResult;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getSubscriptionLine_CreateFromDataResult()
    {
      return $this->SubscriptionLine_CreateFromDataResult;
    }

    /**
     * @param SubscriptionLineHandle $SubscriptionLine_CreateFromDataResult
     * @return \Economic\SubscriptionLine_CreateFromDataResponse
     */
    public function setSubscriptionLine_CreateFromDataResult($SubscriptionLine_CreateFromDataResult)
    {
      $this->SubscriptionLine_CreateFromDataResult = $SubscriptionLine_CreateFromDataResult;
      return $this;
    }

}
