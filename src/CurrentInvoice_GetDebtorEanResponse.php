<?php

namespace Economic;

class CurrentInvoice_GetDebtorEanResponse
{

    /**
     * @var string $CurrentInvoice_GetDebtorEanResult
     */
    protected $CurrentInvoice_GetDebtorEanResult = null;

    /**
     * @param string $CurrentInvoice_GetDebtorEanResult
     */
    public function __construct($CurrentInvoice_GetDebtorEanResult)
    {
      $this->CurrentInvoice_GetDebtorEanResult = $CurrentInvoice_GetDebtorEanResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDebtorEanResult()
    {
      return $this->CurrentInvoice_GetDebtorEanResult;
    }

    /**
     * @param string $CurrentInvoice_GetDebtorEanResult
     * @return \Economic\CurrentInvoice_GetDebtorEanResponse
     */
    public function setCurrentInvoice_GetDebtorEanResult($CurrentInvoice_GetDebtorEanResult)
    {
      $this->CurrentInvoice_GetDebtorEanResult = $CurrentInvoice_GetDebtorEanResult;
      return $this;
    }

}
