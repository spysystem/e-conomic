<?php

namespace Economic;

class SubscriptionLine_GetNumberResponse
{

    /**
     * @var int $SubscriptionLine_GetNumberResult
     */
    protected $SubscriptionLine_GetNumberResult = null;

    /**
     * @param int $SubscriptionLine_GetNumberResult
     */
    public function __construct($SubscriptionLine_GetNumberResult)
    {
      $this->SubscriptionLine_GetNumberResult = $SubscriptionLine_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getSubscriptionLine_GetNumberResult()
    {
      return $this->SubscriptionLine_GetNumberResult;
    }

    /**
     * @param int $SubscriptionLine_GetNumberResult
     * @return \Economic\SubscriptionLine_GetNumberResponse
     */
    public function setSubscriptionLine_GetNumberResult($SubscriptionLine_GetNumberResult)
    {
      $this->SubscriptionLine_GetNumberResult = $SubscriptionLine_GetNumberResult;
      return $this;
    }

}
