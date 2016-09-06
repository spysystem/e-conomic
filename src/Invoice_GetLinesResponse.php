<?php

namespace Economic;

class Invoice_GetLinesResponse
{

    /**
     * @var ArrayOfInvoiceLineHandle $Invoice_GetLinesResult
     */
    protected $Invoice_GetLinesResult = null;

    /**
     * @param ArrayOfInvoiceLineHandle $Invoice_GetLinesResult
     */
    public function __construct($Invoice_GetLinesResult)
    {
      $this->Invoice_GetLinesResult = $Invoice_GetLinesResult;
    }

    /**
     * @return ArrayOfInvoiceLineHandle
     */
    public function getInvoice_GetLinesResult()
    {
      return $this->Invoice_GetLinesResult;
    }

    /**
     * @param ArrayOfInvoiceLineHandle $Invoice_GetLinesResult
     * @return \Economic\Invoice_GetLinesResponse
     */
    public function setInvoice_GetLinesResult($Invoice_GetLinesResult)
    {
      $this->Invoice_GetLinesResult = $Invoice_GetLinesResult;
      return $this;
    }

}
