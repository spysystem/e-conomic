<?php

namespace Economic;

class SubscriptionLine_FindBySubscriptonListResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $SubscriptionLine_FindBySubscriptonListResult
     */
    protected $SubscriptionLine_FindBySubscriptonListResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindBySubscriptonListResult
     */
    public function __construct($SubscriptionLine_FindBySubscriptonListResult)
    {
      $this->SubscriptionLine_FindBySubscriptonListResult = $SubscriptionLine_FindBySubscriptonListResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscriptionLine_FindBySubscriptonListResult()
    {
      return $this->SubscriptionLine_FindBySubscriptonListResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindBySubscriptonListResult
     * @return \Economic\SubscriptionLine_FindBySubscriptonListResponse
     */
    public function setSubscriptionLine_FindBySubscriptonListResult($SubscriptionLine_FindBySubscriptonListResult)
    {
      $this->SubscriptionLine_FindBySubscriptonListResult = $SubscriptionLine_FindBySubscriptonListResult;
      return $this;
    }

}
