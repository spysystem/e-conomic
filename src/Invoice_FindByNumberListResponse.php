<?php

namespace Economic;

class Invoice_FindByNumberListResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Invoice_FindByNumberListResult
     */
    protected $Invoice_FindByNumberListResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByNumberListResult
     */
    public function __construct($Invoice_FindByNumberListResult)
    {
      $this->Invoice_FindByNumberListResult = $Invoice_FindByNumberListResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoice_FindByNumberListResult()
    {
      return $this->Invoice_FindByNumberListResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByNumberListResult
     * @return \Economic\Invoice_FindByNumberListResponse
     */
    public function setInvoice_FindByNumberListResult($Invoice_FindByNumberListResult)
    {
      $this->Invoice_FindByNumberListResult = $Invoice_FindByNumberListResult;
      return $this;
    }

}
