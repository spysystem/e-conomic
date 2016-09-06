<?php

namespace Economic;

class Invoice_GetDebtorNameResponse
{

    /**
     * @var string $Invoice_GetDebtorNameResult
     */
    protected $Invoice_GetDebtorNameResult = null;

    /**
     * @param string $Invoice_GetDebtorNameResult
     */
    public function __construct($Invoice_GetDebtorNameResult)
    {
      $this->Invoice_GetDebtorNameResult = $Invoice_GetDebtorNameResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDebtorNameResult()
    {
      return $this->Invoice_GetDebtorNameResult;
    }

    /**
     * @param string $Invoice_GetDebtorNameResult
     * @return \Economic\Invoice_GetDebtorNameResponse
     */
    public function setInvoice_GetDebtorNameResult($Invoice_GetDebtorNameResult)
    {
      $this->Invoice_GetDebtorNameResult = $Invoice_GetDebtorNameResult;
      return $this;
    }

}
