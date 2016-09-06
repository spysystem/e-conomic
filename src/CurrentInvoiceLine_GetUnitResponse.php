<?php

namespace Economic;

class CurrentInvoiceLine_GetUnitResponse
{

    /**
     * @var UnitHandle $CurrentInvoiceLine_GetUnitResult
     */
    protected $CurrentInvoiceLine_GetUnitResult = null;

    /**
     * @param UnitHandle $CurrentInvoiceLine_GetUnitResult
     */
    public function __construct($CurrentInvoiceLine_GetUnitResult)
    {
      $this->CurrentInvoiceLine_GetUnitResult = $CurrentInvoiceLine_GetUnitResult;
    }

    /**
     * @return UnitHandle
     */
    public function getCurrentInvoiceLine_GetUnitResult()
    {
      return $this->CurrentInvoiceLine_GetUnitResult;
    }

    /**
     * @param UnitHandle $CurrentInvoiceLine_GetUnitResult
     * @return \Economic\CurrentInvoiceLine_GetUnitResponse
     */
    public function setCurrentInvoiceLine_GetUnitResult($CurrentInvoiceLine_GetUnitResult)
    {
      $this->CurrentInvoiceLine_GetUnitResult = $CurrentInvoiceLine_GetUnitResult;
      return $this;
    }

}
