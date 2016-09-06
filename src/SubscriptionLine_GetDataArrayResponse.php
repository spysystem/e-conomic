<?php

namespace Economic;

class SubscriptionLine_GetDataArrayResponse
{

    /**
     * @var ArrayOfSubscriptionLineData $SubscriptionLine_GetDataArrayResult
     */
    protected $SubscriptionLine_GetDataArrayResult = null;

    /**
     * @param ArrayOfSubscriptionLineData $SubscriptionLine_GetDataArrayResult
     */
    public function __construct($SubscriptionLine_GetDataArrayResult)
    {
      $this->SubscriptionLine_GetDataArrayResult = $SubscriptionLine_GetDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriptionLineData
     */
    public function getSubscriptionLine_GetDataArrayResult()
    {
      return $this->SubscriptionLine_GetDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriptionLineData $SubscriptionLine_GetDataArrayResult
     * @return \Economic\SubscriptionLine_GetDataArrayResponse
     */
    public function setSubscriptionLine_GetDataArrayResult($SubscriptionLine_GetDataArrayResult)
    {
      $this->SubscriptionLine_GetDataArrayResult = $SubscriptionLine_GetDataArrayResult;
      return $this;
    }

}
