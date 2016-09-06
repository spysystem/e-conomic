<?php

namespace Economic;

class SubscriptionLine_GetAllResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $SubscriptionLine_GetAllResult
     */
    protected $SubscriptionLine_GetAllResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_GetAllResult
     */
    public function __construct($SubscriptionLine_GetAllResult)
    {
      $this->SubscriptionLine_GetAllResult = $SubscriptionLine_GetAllResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscriptionLine_GetAllResult()
    {
      return $this->SubscriptionLine_GetAllResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_GetAllResult
     * @return \Economic\SubscriptionLine_GetAllResponse
     */
    public function setSubscriptionLine_GetAllResult($SubscriptionLine_GetAllResult)
    {
      $this->SubscriptionLine_GetAllResult = $SubscriptionLine_GetAllResult;
      return $this;
    }

}
