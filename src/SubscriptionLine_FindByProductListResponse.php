<?php

namespace Economic;

class SubscriptionLine_FindByProductListResponse
{

    /**
     * @var ArrayOfSubscriptionLineHandle $SubscriptionLine_FindByProductListResult
     */
    protected $SubscriptionLine_FindByProductListResult = null;

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindByProductListResult
     */
    public function __construct($SubscriptionLine_FindByProductListResult)
    {
      $this->SubscriptionLine_FindByProductListResult = $SubscriptionLine_FindByProductListResult;
    }

    /**
     * @return ArrayOfSubscriptionLineHandle
     */
    public function getSubscriptionLine_FindByProductListResult()
    {
      return $this->SubscriptionLine_FindByProductListResult;
    }

    /**
     * @param ArrayOfSubscriptionLineHandle $SubscriptionLine_FindByProductListResult
     * @return \Economic\SubscriptionLine_FindByProductListResponse
     */
    public function setSubscriptionLine_FindByProductListResult($SubscriptionLine_FindByProductListResult)
    {
      $this->SubscriptionLine_FindByProductListResult = $SubscriptionLine_FindByProductListResult;
      return $this;
    }

}
