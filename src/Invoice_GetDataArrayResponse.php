<?php

namespace Economic;

class Invoice_GetDataArrayResponse
{

    /**
     * @var ArrayOfInvoiceData $Invoice_GetDataArrayResult
     */
    protected $Invoice_GetDataArrayResult = null;

    /**
     * @param ArrayOfInvoiceData $Invoice_GetDataArrayResult
     */
    public function __construct($Invoice_GetDataArrayResult)
    {
      $this->Invoice_GetDataArrayResult = $Invoice_GetDataArrayResult;
    }

    /**
     * @return ArrayOfInvoiceData
     */
    public function getInvoice_GetDataArrayResult()
    {
      return $this->Invoice_GetDataArrayResult;
    }

    /**
     * @param ArrayOfInvoiceData $Invoice_GetDataArrayResult
     * @return \Economic\Invoice_GetDataArrayResponse
     */
    public function setInvoice_GetDataArrayResult($Invoice_GetDataArrayResult)
    {
      $this->Invoice_GetDataArrayResult = $Invoice_GetDataArrayResult;
      return $this;
    }

}
