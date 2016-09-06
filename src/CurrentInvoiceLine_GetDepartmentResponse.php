<?php

namespace Economic;

class CurrentInvoiceLine_GetDepartmentResponse
{

    /**
     * @var DepartmentHandle $CurrentInvoiceLine_GetDepartmentResult
     */
    protected $CurrentInvoiceLine_GetDepartmentResult = null;

    /**
     * @param DepartmentHandle $CurrentInvoiceLine_GetDepartmentResult
     */
    public function __construct($CurrentInvoiceLine_GetDepartmentResult)
    {
      $this->CurrentInvoiceLine_GetDepartmentResult = $CurrentInvoiceLine_GetDepartmentResult;
    }

    /**
     * @return DepartmentHandle
     */
    public function getCurrentInvoiceLine_GetDepartmentResult()
    {
      return $this->CurrentInvoiceLine_GetDepartmentResult;
    }

    /**
     * @param DepartmentHandle $CurrentInvoiceLine_GetDepartmentResult
     * @return \Economic\CurrentInvoiceLine_GetDepartmentResponse
     */
    public function setCurrentInvoiceLine_GetDepartmentResult($CurrentInvoiceLine_GetDepartmentResult)
    {
      $this->CurrentInvoiceLine_GetDepartmentResult = $CurrentInvoiceLine_GetDepartmentResult;
      return $this;
    }

}
