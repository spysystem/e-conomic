<?php

namespace Economic;

class InvoiceLine_GetDataArrayResponse
{

    /**
     * @var ArrayOfInvoiceLineData $InvoiceLine_GetDataArrayResult
     */
    protected $InvoiceLine_GetDataArrayResult = null;

    /**
     * @param ArrayOfInvoiceLineData $InvoiceLine_GetDataArrayResult
     */
    public function __construct($InvoiceLine_GetDataArrayResult)
    {
      $this->InvoiceLine_GetDataArrayResult = $InvoiceLine_GetDataArrayResult;
    }

    /**
     * @return ArrayOfInvoiceLineData
     */
    public function getInvoiceLine_GetDataArrayResult()
    {
      return $this->InvoiceLine_GetDataArrayResult;
    }

    /**
     * @param ArrayOfInvoiceLineData $InvoiceLine_GetDataArrayResult
     * @return \Economic\InvoiceLine_GetDataArrayResponse
     */
    public function setInvoiceLine_GetDataArrayResult($InvoiceLine_GetDataArrayResult)
    {
      $this->InvoiceLine_GetDataArrayResult = $InvoiceLine_GetDataArrayResult;
      return $this;
    }

}
