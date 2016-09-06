<?php

namespace Economic;

class Product_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $Product_GetDepartmentResult
     */
    protected $Product_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $Product_GetDepartmentResult
     */
    public function __construct($Product_GetDepartmentResult)
    {
      $this->Product_GetDepartmentResult = $Product_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getProduct_GetDepartmentResult()
    {
      return $this->Product_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $Product_GetDepartmentResult
     * @return \Economic\Product_GetDepartmentResponse
     */
    public function setProduct_GetDepartmentResult($Product_GetDepartmentResult)
    {
      $this->Product_GetDepartmentResult = $Product_GetDepartmentResult;
      return $this;
    }

}
