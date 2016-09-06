<?php

namespace Economic;

class Invoice_FindByOrderNumberResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Invoice_FindByOrderNumberResult
     */
    protected $Invoice_FindByOrderNumberResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByOrderNumberResult
     */
    public function __construct($Invoice_FindByOrderNumberResult)
    {
      $this->Invoice_FindByOrderNumberResult = $Invoice_FindByOrderNumberResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoice_FindByOrderNumberResult()
    {
      return $this->Invoice_FindByOrderNumberResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByOrderNumberResult
     * @return \Economic\Invoice_FindByOrderNumberResponse
     */
    public function setInvoice_FindByOrderNumberResult($Invoice_FindByOrderNumberResult)
    {
      $this->Invoice_FindByOrderNumberResult = $Invoice_FindByOrderNumberResult;
      return $this;
    }

}
