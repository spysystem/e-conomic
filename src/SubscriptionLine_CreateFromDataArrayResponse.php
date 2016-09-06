<?php

namespace Economic;

class SubscriptionLine_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $SubscriptionLine_CreateFromDataArrayResult
     */
    protected $SubscriptionLine_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_CreateFromDataArrayResult
     */
    public function __construct($SubscriptionLine_CreateFromDataArrayResult)
    {
      $this->SubscriptionLine_CreateFromDataArrayResult = $SubscriptionLine_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscriptionLine_CreateFromDataArrayResult()
    {
      return $this->SubscriptionLine_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_CreateFromDataArrayResult
     * @return \Economic\SubscriptionLine_CreateFromDataArrayResponse
     */
    public function setSubscriptionLine_CreateFromDataArrayResult($SubscriptionLine_CreateFromDataArrayResult)
    {
      $this->SubscriptionLine_CreateFromDataArrayResult = $SubscriptionLine_CreateFromDataArrayResult;
      return $this;
    }

}
