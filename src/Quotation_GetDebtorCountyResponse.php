<?php

namespace Economic;

class Quotation_GetDebtorCountyResponse
{

    /**
     * @var string $Quotation_GetDebtorCountyResult
     */
    protected $Quotation_GetDebtorCountyResult = null;

    /**
     * @param string $Quotation_GetDebtorCountyResult
     */
    public function __construct($Quotation_GetDebtorCountyResult)
    {
      $this->Quotation_GetDebtorCountyResult = $Quotation_GetDebtorCountyResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDebtorCountyResult()
    {
      return $this->Quotation_GetDebtorCountyResult;
    }

    /**
     * @param string $Quotation_GetDebtorCountyResult
     * @return \Economic\Quotation_GetDebtorCountyResponse
     */
    public function setQuotation_GetDebtorCountyResult($Quotation_GetDebtorCountyResult)
    {
      $this->Quotation_GetDebtorCountyResult = $Quotation_GetDebtorCountyResult;
      return $this;
    }

}
