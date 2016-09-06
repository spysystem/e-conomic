<?php

namespace Economic;

class Quotation_FindByNumberIntervalResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_FindByNumberIntervalResult
     */
    protected $Quotation_FindByNumberIntervalResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_FindByNumberIntervalResult
     */
    public function __construct($Quotation_FindByNumberIntervalResult)
    {
      $this->Quotation_FindByNumberIntervalResult = $Quotation_FindByNumberIntervalResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_FindByNumberIntervalResult()
    {
      return $this->Quotation_FindByNumberIntervalResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_FindByNumberIntervalResult
     * @return \Economic\Quotation_FindByNumberIntervalResponse
     */
    public function setQuotation_FindByNumberIntervalResult($Quotation_FindByNumberIntervalResult)
    {
      $this->Quotation_FindByNumberIntervalResult = $Quotation_FindByNumberIntervalResult;
      return $this;
    }

}
