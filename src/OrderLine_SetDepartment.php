<?php

namespace Economic;

class OrderLine_SetDepartment
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @var DepartmentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     * @param DepartmentHandle $valueHandle
     */
    public function __construct($orderLineHandle, $valueHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return OrderLineHandle
     */
    public function getOrderLineHandle()
    {
      return $this->orderLineHandle;
    }

    /**
     * @param OrderLineHandle $orderLineHandle
     * @return \Economic\OrderLine_SetDepartment
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
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
     * @return \Economic\OrderLine_SetDepartment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
