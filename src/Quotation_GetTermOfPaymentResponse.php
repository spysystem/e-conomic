<?php

namespace Economic;

class Quotation_GetTermOfPaymentResponse
{

    /**
     * @var TermOfPaymentHandle $Quotation_GetTermOfPaymentResult
     */
    protected $Quotation_GetTermOfPaymentResult = null;

    /**
     * @param TermOfPaymentHandle $Quotation_GetTermOfPaymentResult
     */
    public function __construct($Quotation_GetTermOfPaymentResult)
    {
      $this->Quotation_GetTermOfPaymentResult = $Quotation_GetTermOfPaymentResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getQuotation_GetTermOfPaymentResult()
    {
      return $this->Quotation_GetTermOfPaymentResult;
    }

    /**
     * @param TermOfPaymentHandle $Quotation_GetTermOfPaymentResult
     * @return \Economic\Quotation_GetTermOfPaymentResponse
     */
    public function setQuotation_GetTermOfPaymentResult($Quotation_GetTermOfPaymentResult)
    {
      $this->Quotation_GetTermOfPaymentResult = $Quotation_GetTermOfPaymentResult;
      return $this;
    }

}
