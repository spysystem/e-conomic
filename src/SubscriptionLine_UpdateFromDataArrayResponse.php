<?php

namespace Economic;

class SubscriptionLine_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $SubscriptionLine_UpdateFromDataArrayResult
     */
    protected $SubscriptionLine_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_UpdateFromDataArrayResult
     */
    public function __construct($SubscriptionLine_UpdateFromDataArrayResult)
    {
      $this->SubscriptionLine_UpdateFromDataArrayResult = $SubscriptionLine_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscriptionLine_UpdateFromDataArrayResult()
    {
      return $this->SubscriptionLine_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_UpdateFromDataArrayResult
     * @return \Economic\SubscriptionLine_UpdateFromDataArrayResponse
     */
    public function setSubscriptionLine_UpdateFromDataArrayResult($SubscriptionLine_UpdateFromDataArrayResult)
    {
      $this->SubscriptionLine_UpdateFromDataArrayResult = $SubscriptionLine_UpdateFromDataArrayResult;
      return $this;
    }

}
