<?php

namespace Economic;

class CurrentInvoice_GetDebtorNameResponse
{

    /**
     * @var string $CurrentInvoice_GetDebtorNameResult
     */
    protected $CurrentInvoice_GetDebtorNameResult = null;

    /**
     * @param string $CurrentInvoice_GetDebtorNameResult
     */
    public function __construct($CurrentInvoice_GetDebtorNameResult)
    {
      $this->CurrentInvoice_GetDebtorNameResult = $CurrentInvoice_GetDebtorNameResult;
    }

    /**
     * @return string
     */
    public function getCurrentInvoice_GetDebtorNameResult()
    {
      return $this->CurrentInvoice_GetDebtorNameResult;
    }

    /**
     * @param string $CurrentInvoice_GetDebtorNameResult
     * @return \Economic\CurrentInvoice_GetDebtorNameResponse
     */
    public function setCurrentInvoice_GetDebtorNameResult($CurrentInvoice_GetDebtorNameResult)
    {
      $this->CurrentInvoice_GetDebtorNameResult = $CurrentInvoice_GetDebtorNameResult;
      return $this;
    }

}
