<?php

namespace Economic;

class Invoice_GetAllResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Invoice_GetAllResult
     */
    protected $Invoice_GetAllResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Invoice_GetAllResult
     */
    public function __construct($Invoice_GetAllResult)
    {
      $this->Invoice_GetAllResult = $Invoice_GetAllResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoice_GetAllResult()
    {
      return $this->Invoice_GetAllResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Invoice_GetAllResult
     * @return \Economic\Invoice_GetAllResponse
     */
    public function setInvoice_GetAllResult($Invoice_GetAllResult)
    {
      $this->Invoice_GetAllResult = $Invoice_GetAllResult;
      return $this;
    }

}
