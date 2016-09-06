<?php

namespace Economic;

class Invoice_GetRemainderResponse
{

    /**
     * @var float $Invoice_GetRemainderResult
     */
    protected $Invoice_GetRemainderResult = null;

    /**
     * @param float $Invoice_GetRemainderResult
     */
    public function __construct($Invoice_GetRemainderResult)
    {
      $this->Invoice_GetRemainderResult = $Invoice_GetRemainderResult;
    }

    /**
     * @return float
     */
    public function getInvoice_GetRemainderResult()
    {
      return $this->Invoice_GetRemainderResult;
    }

    /**
     * @param float $Invoice_GetRemainderResult
     * @return \Economic\Invoice_GetRemainderResponse
     */
    public function setInvoice_GetRemainderResult($Invoice_GetRemainderResult)
    {
      $this->Invoice_GetRemainderResult = $Invoice_GetRemainderResult;
      return $this;
    }

}
