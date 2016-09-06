<?php

namespace Economic;

class Quotation_GetLinesResponse
{

    /**
     * @var ArrayOfQuotationLineHandle $Quotation_GetLinesResult
     */
    protected $Quotation_GetLinesResult = null;

    /**
     * @param ArrayOfQuotationLineHandle $Quotation_GetLinesResult
     */
    public function __construct($Quotation_GetLinesResult)
    {
      $this->Quotation_GetLinesResult = $Quotation_GetLinesResult;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getQuotation_GetLinesResult()
    {
      return $this->Quotation_GetLinesResult;
    }

    /**
     * @param ArrayOfQuotationLineHandle $Quotation_GetLinesResult
     * @return \Economic\Quotation_GetLinesResponse
     */
    public function setQuotation_GetLinesResult($Quotation_GetLinesResult)
    {
      $this->Quotation_GetLinesResult = $Quotation_GetLinesResult;
      return $this;
    }

}
