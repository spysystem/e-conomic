<?php

namespace Economic;

class Invoice_FindByNumberIntervalResponse
{

    /**
     * @var ArrayOfInvoiceHandle $Invoice_FindByNumberIntervalResult
     */
    protected $Invoice_FindByNumberIntervalResult = null;

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByNumberIntervalResult
     */
    public function __construct($Invoice_FindByNumberIntervalResult)
    {
      $this->Invoice_FindByNumberIntervalResult = $Invoice_FindByNumberIntervalResult;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getInvoice_FindByNumberIntervalResult()
    {
      return $this->Invoice_FindByNumberIntervalResult;
    }

    /**
     * @param ArrayOfInvoiceHandle $Invoice_FindByNumberIntervalResult
     * @return \Economic\Invoice_FindByNumberIntervalResponse
     */
    public function setInvoice_FindByNumberIntervalResult($Invoice_FindByNumberIntervalResult)
    {
      $this->Invoice_FindByNumberIntervalResult = $Invoice_FindByNumberIntervalResult;
      return $this;
    }

}
