<?php

namespace Economic;

class Quotation_GetDebtorNameResponse
{

    /**
     * @var string $Quotation_GetDebtorNameResult
     */
    protected $Quotation_GetDebtorNameResult = null;

    /**
     * @param string $Quotation_GetDebtorNameResult
     */
    public function __construct($Quotation_GetDebtorNameResult)
    {
      $this->Quotation_GetDebtorNameResult = $Quotation_GetDebtorNameResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDebtorNameResult()
    {
      return $this->Quotation_GetDebtorNameResult;
    }

    /**
     * @param string $Quotation_GetDebtorNameResult
     * @return \Economic\Quotation_GetDebtorNameResponse
     */
    public function setQuotation_GetDebtorNameResult($Quotation_GetDebtorNameResult)
    {
      $this->Quotation_GetDebtorNameResult = $Quotation_GetDebtorNameResult;
      return $this;
    }

}
