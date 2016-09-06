<?php

namespace Economic;

class Quotation_GetMarginResponse
{

    /**
     * @var float $Quotation_GetMarginResult
     */
    protected $Quotation_GetMarginResult = null;

    /**
     * @param float $Quotation_GetMarginResult
     */
    public function __construct($Quotation_GetMarginResult)
    {
      $this->Quotation_GetMarginResult = $Quotation_GetMarginResult;
    }

    /**
     * @return float
     */
    public function getQuotation_GetMarginResult()
    {
      return $this->Quotation_GetMarginResult;
    }

    /**
     * @param float $Quotation_GetMarginResult
     * @return \Economic\Quotation_GetMarginResponse
     */
    public function setQuotation_GetMarginResult($Quotation_GetMarginResult)
    {
      $this->Quotation_GetMarginResult = $Quotation_GetMarginResult;
      return $this;
    }

}
