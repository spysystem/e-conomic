<?php

namespace Economic;

class SubscriptionLine_GetDataResponse
{

    /**
     * @var SubscriptionLineData $SubscriptionLine_GetDataResult
     */
    protected $SubscriptionLine_GetDataResult = null;

    /**
     * @param SubscriptionLineData $SubscriptionLine_GetDataResult
     */
    public function __construct($SubscriptionLine_GetDataResult)
    {
      $this->SubscriptionLine_GetDataResult = $SubscriptionLine_GetDataResult;
    }

    /**
     * @return SubscriptionLineData
     */
    public function getSubscriptionLine_GetDataResult()
    {
      return $this->SubscriptionLine_GetDataResult;
    }

    /**
     * @param SubscriptionLineData $SubscriptionLine_GetDataResult
     * @return \Economic\SubscriptionLine_GetDataResponse
     */
    public function setSubscriptionLine_GetDataResult($SubscriptionLine_GetDataResult)
    {
      $this->SubscriptionLine_GetDataResult = $SubscriptionLine_GetDataResult;
      return $this;
    }

}
