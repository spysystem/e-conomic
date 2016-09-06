<?php

namespace Economic;

class Quotation_FindByDateIntervalResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_FindByDateIntervalResult
     */
    protected $Quotation_FindByDateIntervalResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_FindByDateIntervalResult
     */
    public function __construct($Quotation_FindByDateIntervalResult)
    {
      $this->Quotation_FindByDateIntervalResult = $Quotation_FindByDateIntervalResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_FindByDateIntervalResult()
    {
      return $this->Quotation_FindByDateIntervalResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_FindByDateIntervalResult
     * @return \Economic\Quotation_FindByDateIntervalResponse
     */
    public function setQuotation_FindByDateIntervalResult($Quotation_FindByDateIntervalResult)
    {
      $this->Quotation_FindByDateIntervalResult = $Quotation_FindByDateIntervalResult;
      return $this;
    }

}
