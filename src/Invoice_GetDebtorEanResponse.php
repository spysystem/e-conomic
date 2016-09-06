<?php

namespace Economic;

class Invoice_GetDebtorEanResponse
{

    /**
     * @var string $Invoice_GetDebtorEanResult
     */
    protected $Invoice_GetDebtorEanResult = null;

    /**
     * @param string $Invoice_GetDebtorEanResult
     */
    public function __construct($Invoice_GetDebtorEanResult)
    {
      $this->Invoice_GetDebtorEanResult = $Invoice_GetDebtorEanResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDebtorEanResult()
    {
      return $this->Invoice_GetDebtorEanResult;
    }

    /**
     * @param string $Invoice_GetDebtorEanResult
     * @return \Economic\Invoice_GetDebtorEanResponse
     */
    public function setInvoice_GetDebtorEanResult($Invoice_GetDebtorEanResult)
    {
      $this->Invoice_GetDebtorEanResult = $Invoice_GetDebtorEanResult;
      return $this;
    }

}
