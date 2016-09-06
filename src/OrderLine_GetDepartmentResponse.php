<?php

namespace Economic;

class OrderLine_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $OrderLine_GetDepartmentResult
     */
    protected $OrderLine_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $OrderLine_GetDepartmentResult
     */
    public function __construct($OrderLine_GetDepartmentResult)
    {
      $this->OrderLine_GetDepartmentResult = $OrderLine_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getOrderLine_GetDepartmentResult()
    {
      return $this->OrderLine_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $OrderLine_GetDepartmentResult
     * @return \Economic\OrderLine_GetDepartmentResponse
     */
    public function setOrderLine_GetDepartmentResult($OrderLine_GetDepartmentResult)
    {
      $this->OrderLine_GetDepartmentResult = $OrderLine_GetDepartmentResult;
      return $this;
    }

}
