<?php

namespace Economic;

class Invoice_FindByDateIntervalResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Invoice_FindByDateIntervalResult
     */
    protected $Invoice_FindByDateIntervalResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByDateIntervalResult
     */
    public function __construct($Invoice_FindByDateIntervalResult)
    {
      $this->Invoice_FindByDateIntervalResult = $Invoice_FindByDateIntervalResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoice_FindByDateIntervalResult()
    {
      return $this->Invoice_FindByDateIntervalResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByDateIntervalResult
     * @return \Economic\Invoice_FindByDateIntervalResponse
     */
    public function setInvoice_FindByDateIntervalResult($Invoice_FindByDateIntervalResult)
    {
      $this->Invoice_FindByDateIntervalResult = $Invoice_FindByDateIntervalResult;
      return $this;
    }

}
