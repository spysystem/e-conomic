<?php

namespace Economic;

class Invoice_GetDebtorCityResponse
{

    /**
     * @var string $Invoice_GetDebtorCityResult
     */
    protected $Invoice_GetDebtorCityResult = null;

    /**
     * @param string $Invoice_GetDebtorCityResult
     */
    public function __construct($Invoice_GetDebtorCityResult)
    {
      $this->Invoice_GetDebtorCityResult = $Invoice_GetDebtorCityResult;
    }

    /**
     * @return string
     */
    public function getInvoice_GetDebtorCityResult()
    {
      return $this->Invoice_GetDebtorCityResult;
    }

    /**
     * @param string $Invoice_GetDebtorCityResult
     * @return \Economic\Invoice_GetDebtorCityResponse
     */
    public function setInvoice_GetDebtorCityResult($Invoice_GetDebtorCityResult)
    {
      $this->Invoice_GetDebtorCityResult = $Invoice_GetDebtorCityResult;
      return $this;
    }

}
