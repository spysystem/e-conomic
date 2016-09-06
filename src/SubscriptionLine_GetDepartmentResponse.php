<?php

namespace Economic;

class SubscriptionLine_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $SubscriptionLine_GetDepartmentResult
     */
    protected $SubscriptionLine_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $SubscriptionLine_GetDepartmentResult
     */
    public function __construct($SubscriptionLine_GetDepartmentResult)
    {
      $this->SubscriptionLine_GetDepartmentResult = $SubscriptionLine_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getSubscriptionLine_GetDepartmentResult()
    {
      return $this->SubscriptionLine_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $SubscriptionLine_GetDepartmentResult
     * @return \Economic\SubscriptionLine_GetDepartmentResponse
     */
    public function setSubscriptionLine_GetDepartmentResult($SubscriptionLine_GetDepartmentResult)
    {
      $this->SubscriptionLine_GetDepartmentResult = $SubscriptionLine_GetDepartmentResult;
      return $this;
    }

}
