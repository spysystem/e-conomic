<?php

namespace Economic;

class InvoiceLine_GetUnitResponse
{

    /**
     * @var UnitHandle $InvoiceLine_GetUnitResult
     */
    protected $InvoiceLine_GetUnitResult = null;

    /**
     * @param UnitHandle $InvoiceLine_GetUnitResult
     */
    public function __construct($InvoiceLine_GetUnitResult)
    {
      $this->InvoiceLine_GetUnitResult = $InvoiceLine_GetUnitResult;
    }

    /**
     * @return UnitHandle
     */
    public function getInvoiceLine_GetUnitResult()
    {
      return $this->InvoiceLine_GetUnitResult;
    }

    /**
     * @param UnitHandle $InvoiceLine_GetUnitResult
     * @return \Economic\InvoiceLine_GetUnitResponse
     */
    public function setInvoiceLine_GetUnitResult($InvoiceLine_GetUnitResult)
    {
      $this->InvoiceLine_GetUnitResult = $InvoiceLine_GetUnitResult;
      return $this;
    }

}
