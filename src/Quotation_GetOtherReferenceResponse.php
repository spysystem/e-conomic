<?php

namespace Economic;

class Quotation_GetOtherReferenceResponse
{

    /**
     * @var string $Quotation_GetOtherReferenceResult
     */
    protected $Quotation_GetOtherReferenceResult = null;

    /**
     * @param string $Quotation_GetOtherReferenceResult
     */
    public function __construct($Quotation_GetOtherReferenceResult)
    {
      $this->Quotation_GetOtherReferenceResult = $Quotation_GetOtherReferenceResult;
    }

    /**
     * @return string
     */
    public function getQuotation_GetOtherReferenceResult()
    {
      return $this->Quotation_GetOtherReferenceResult;
    }

    /**
     * @param string $Quotation_GetOtherReferenceResult
     * @return \Economic\Quotation_GetOtherReferenceResponse
     */
    public function setQuotation_GetOtherReferenceResult($Quotation_GetOtherReferenceResult)
    {
      $this->Quotation_GetOtherReferenceResult = $Quotation_GetOtherReferenceResult;
      return $this;
    }

}
