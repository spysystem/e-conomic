<?php

namespace Economic;

class Quotation_FindByOtherReferenceResponse
{

    /**
     * @var ArrayOfQuotationHandle $Quotation_FindByOtherReferenceResult
     */
    protected $Quotation_FindByOtherReferenceResult = null;

    /**
     * @param ArrayOfQuotationHandle $Quotation_FindByOtherReferenceResult
     */
    public function __construct($Quotation_FindByOtherReferenceResult)
    {
      $this->Quotation_FindByOtherReferenceResult = $Quotation_FindByOtherReferenceResult;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getQuotation_FindByOtherReferenceResult()
    {
      return $this->Quotation_FindByOtherReferenceResult;
    }

    /**
     * @param ArrayOfQuotationHandle $Quotation_FindByOtherReferenceResult
     * @return \Economic\Quotation_FindByOtherReferenceResponse
     */
    public function setQuotation_FindByOtherReferenceResult($Quotation_FindByOtherReferenceResult)
    {
      $this->Quotation_FindByOtherReferenceResult = $Quotation_FindByOtherReferenceResult;
      return $this;
    }

}
