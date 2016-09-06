<?php

namespace Economic;

class Invoice_GetOrderNumberResponse
{

    /**
     * @var int $Invoice_GetOrderNumberResult
     */
    protected $Invoice_GetOrderNumberResult = null;

    /**
     * @param int $Invoice_GetOrderNumberResult
     */
    public function __construct($Invoice_GetOrderNumberResult)
    {
      $this->Invoice_GetOrderNumberResult = $Invoice_GetOrderNumberResult;
    }

    /**
     * @return int
     */
    public function getInvoice_GetOrderNumberResult()
    {
      return $this->Invoice_GetOrderNumberResult;
    }

    /**
     * @param int $Invoice_GetOrderNumberResult
     * @return \Economic\Invoice_GetOrderNumberResponse
     */
    public function setInvoice_GetOrderNumberResult($Invoice_GetOrderNumberResult)
    {
      $this->Invoice_GetOrderNumberResult = $Invoice_GetOrderNumberResult;
      return $this;
    }

}
