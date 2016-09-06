<?php

namespace Economic;

class Invoice_GetDataResponse
{

    /**
     * @var InvoiceData $Invoice_GetDataResult
     */
    protected $Invoice_GetDataResult = null;

    /**
     * @param InvoiceData $Invoice_GetDataResult
     */
    public function __construct($Invoice_GetDataResult)
    {
      $this->Invoice_GetDataResult = $Invoice_GetDataResult;
    }

    /**
     * @return InvoiceData
     */
    public function getInvoice_GetDataResult()
    {
      return $this->Invoice_GetDataResult;
    }

    /**
     * @param InvoiceData $Invoice_GetDataResult
     * @return \Economic\Invoice_GetDataResponse
     */
    public function setInvoice_GetDataResult($Invoice_GetDataResult)
    {
      $this->Invoice_GetDataResult = $Invoice_GetDataResult;
      return $this;
    }

}
