<?php

namespace Economic;

class SubscriptionLine_SetDepartment
{

    /**
     * @var SubscriptionLineHandle $subscriptionLineHandle
     */
    protected $subscriptionLineHandle = null;

    /**
     * @var DepartmentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @param DepartmentHandle $valueHandle
     */
    public function __construct($subscriptionLineHandle, $valueHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getSubscriptionLineHandle()
    {
      return $this->subscriptionLineHandle;
    }

    /**
     * @param SubscriptionLineHandle $subscriptionLineHandle
     * @return \Economic\SubscriptionLine_SetDepartment
     */
    public function setSubscriptionLineHandle($subscriptionLineHandle)
    {
      $this->subscriptionLineHandle = $subscriptionLineHandle;
      return $this;
    }

    /**
     * @return DepartmentHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DepartmentHandle $valueHandle
     * @return \Economic\SubscriptionLine_SetDepartment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
