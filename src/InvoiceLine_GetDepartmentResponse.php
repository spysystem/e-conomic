<?php

namespace Economic;

class InvoiceLine_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $InvoiceLine_GetDepartmentResult
     */
    protected $InvoiceLine_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $InvoiceLine_GetDepartmentResult
     */
    public function __construct($InvoiceLine_GetDepartmentResult)
    {
      $this->InvoiceLine_GetDepartmentResult = $InvoiceLine_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getInvoiceLine_GetDepartmentResult()
    {
      return $this->InvoiceLine_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $InvoiceLine_GetDepartmentResult
     * @return \Economic\InvoiceLine_GetDepartmentResponse
     */
    public function setInvoiceLine_GetDepartmentResult($InvoiceLine_GetDepartmentResult)
    {
      $this->InvoiceLine_GetDepartmentResult = $InvoiceLine_GetDepartmentResult;
      return $this;
    }

}
