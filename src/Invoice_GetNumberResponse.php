<?php

namespace Economic;

class Invoice_GetNumberResponse
{

    /**
     * @var int $Invoice_GetNumberResult
     */
    protected $Invoice_GetNumberResult = null;

    /**
     * @param int $Invoice_GetNumberResult
     */
    public function __construct($Invoice_GetNumberResult)
    {
      $this->Invoice_GetNumberResult = $Invoice_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getInvoice_GetNumberResult()
    {
      return $this->Invoice_GetNumberResult;
    }

    /**
     * @param int $Invoice_GetNumberResult
     * @return \Economic\Invoice_GetNumberResponse
     */
    public function setInvoice_GetNumberResult($Invoice_GetNumberResult)
    {
      $this->Invoice_GetNumberResult = $Invoice_GetNumberResult;
      return $this;
    }

}
