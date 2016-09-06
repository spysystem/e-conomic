<?php

namespace Economic;

class Invoice_FindByNumberResponse
{

    /**
     * @var InvoiceHandle $Invoice_FindByNumberResult
     */
    protected $Invoice_FindByNumberResult = null;

    /**
     * @param InvoiceHandle $Invoice_FindByNumberResult
     */
    public function __construct($Invoice_FindByNumberResult)
    {
      $this->Invoice_FindByNumberResult = $Invoice_FindByNumberResult;
    }

    /**
     * @return InvoiceHandle
     */
    public function getInvoice_FindByNumberResult()
    {
      return $this->Invoice_FindByNumberResult;
    }

    /**
     * @param InvoiceHandle $Invoice_FindByNumberResult
     * @return \Economic\Invoice_FindByNumberResponse
     */
    public function setInvoice_FindByNumberResult($Invoice_FindByNumberResult)
    {
      $this->Invoice_FindByNumberResult = $Invoice_FindByNumberResult;
      return $this;
    }

}
