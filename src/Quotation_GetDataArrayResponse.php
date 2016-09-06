<?php

namespace Economic;

class Quotation_GetDataArrayResponse
{

    /**
     * @var ArrayOfQuotationData $Quotation_GetDataArrayResult
     */
    protected $Quotation_GetDataArrayResult = null;

    /**
     * @param ArrayOfQuotationData $Quotation_GetDataArrayResult
     */
    public function __construct($Quotation_GetDataArrayResult)
    {
      $this->Quotation_GetDataArrayResult = $Quotation_GetDataArrayResult;
    }

    /**
     * @return ArrayOfQuotationData
     */
    public function getQuotation_GetDataArrayResult()
    {
      return $this->Quotation_GetDataArrayResult;
    }

    /**
     * @param ArrayOfQuotationData $Quotation_GetDataArrayResult
     * @return \Economic\Quotation_GetDataArrayResponse
     */
    public function setQuotation_GetDataArrayResult($Quotation_GetDataArrayResult)
    {
      $this->Quotation_GetDataArrayResult = $Quotation_GetDataArrayResult;
      return $this;
    }

}
