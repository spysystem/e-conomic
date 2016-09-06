<?php

namespace Economic;

class InvoiceLine_GetDataResponse
{

    /**
     * @var InvoiceLineData $InvoiceLine_GetDataResult
     */
    protected $InvoiceLine_GetDataResult = null;

    /**
     * @param InvoiceLineData $InvoiceLine_GetDataResult
     */
    public function __construct($InvoiceLine_GetDataResult)
    {
      $this->InvoiceLine_GetDataResult = $InvoiceLine_GetDataResult;
    }

    /**
     * @return InvoiceLineData
     */
    public function getInvoiceLine_GetDataResult()
    {
      return $this->InvoiceLine_GetDataResult;
    }

    /**
     * @param InvoiceLineData $InvoiceLine_GetDataResult
     * @return \Economic\InvoiceLine_GetDataResponse
     */
    public function setInvoiceLine_GetDataResult($InvoiceLine_GetDataResult)
    {
      $this->InvoiceLine_GetDataResult = $InvoiceLine_GetDataResult;
      return $this;
    }

}
