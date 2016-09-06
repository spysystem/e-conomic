<?php

namespace Economic;

class Invoice_GetDebtorCountyResponse
{

    /**
     * @var string $Invoice_GetDebtorCountyResult
     */
    protected $Invoice_GetDebtorCountyResult = null;

    /**
     * @param string $Invoice_GetDebtorCountyResult
     */
    public function __construct($Invoice_GetDebtorCountyResult)
    {
      $this->Invoice_GetDebtorCountyResult = $Invoice_GetDebtorCountyResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDebtorCountyResult()
    {
      return $this->Invoice_GetDebtorCountyResult;
    }

    /**
     * @param string $Invoice_GetDebtorCountyResult
     * @return \Economic\Invoice_GetDebtorCountyResponse
     */
    public function setInvoice_GetDebtorCountyResult($Invoice_GetDebtorCountyResult)
    {
      $this->Invoice_GetDebtorCountyResult = $Invoice_GetDebtorCountyResult;
      return $this;
    }

}
