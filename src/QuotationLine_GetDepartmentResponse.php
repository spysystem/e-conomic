<?php

namespace Economic;

class QuotationLine_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $QuotationLine_GetDepartmentResult
     */
    protected $QuotationLine_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $QuotationLine_GetDepartmentResult
     */
    public function __construct($QuotationLine_GetDepartmentResult)
    {
      $this->QuotationLine_GetDepartmentResult = $QuotationLine_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getQuotationLine_GetDepartmentResult()
    {
      return $this->QuotationLine_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $QuotationLine_GetDepartmentResult
     * @return \Economic\QuotationLine_GetDepartmentResponse
     */
    public function setQuotationLine_GetDepartmentResult($QuotationLine_GetDepartmentResult)
    {
      $this->QuotationLine_GetDepartmentResult = $QuotationLine_GetDepartmentResult;
      return $this;
    }

}
