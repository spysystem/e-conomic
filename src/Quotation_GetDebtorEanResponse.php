<?php

namespace Economic;

class Quotation_GetDebtorEanResponse
{

    /**
     * @var string $Quotation_GetDebtorEanResult
     */
    protected $Quotation_GetDebtorEanResult = null;

    /**
     * @param string $Quotation_GetDebtorEanResult
     */
    public function __construct($Quotation_GetDebtorEanResult)
    {
      $this->Quotation_GetDebtorEanResult = $Quotation_GetDebtorEanResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetDebtorEanResult()
    {
      return $this->Quotation_GetDebtorEanResult;
    }

    /**
     * @param string $Quotation_GetDebtorEanResult
     * @return \Economic\Quotation_GetDebtorEanResponse
     */
    public function setQuotation_GetDebtorEanResult($Quotation_GetDebtorEanResult)
    {
      $this->Quotation_GetDebtorEanResult = $Quotation_GetDebtorEanResult;
      return $this;
    }

}
