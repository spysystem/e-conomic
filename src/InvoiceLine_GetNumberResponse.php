<?php

namespace Economic;

class InvoiceLine_GetNumberResponse
{

    /**
     * @var int $InvoiceLine_GetNumberResult
     */
    protected $InvoiceLine_GetNumberResult = null;

    /**
     * @param int $InvoiceLine_GetNumberResult
     */
    public function __construct($InvoiceLine_GetNumberResult)
    {
      $this->InvoiceLine_GetNumberResult = $InvoiceLine_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getInvoiceLine_GetNumberResult()
    {
      return $this->InvoiceLine_GetNumberResult;
    }

    /**
     * @param int $InvoiceLine_GetNumberResult
     * @return \Economic\InvoiceLine_GetNumberResponse
     */
    public function setInvoiceLine_GetNumberResult($InvoiceLine_GetNumberResult)
    {
      $this->InvoiceLine_GetNumberResult = $InvoiceLine_GetNumberResult;
      return $this;
    }

}
