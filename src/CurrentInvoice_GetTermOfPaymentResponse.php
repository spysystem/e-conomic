<?php

namespace Economic;

class CurrentInvoice_GetTermOfPaymentResponse
{

    /**
     * @var TermOfPaymentHandle $CurrentInvoice_GetTermOfPaymentResult
     */
    protected $CurrentInvoice_GetTermOfPaymentResult = null;

    /**
     * @param TermOfPaymentHandle $CurrentInvoice_GetTermOfPaymentResult
     */
    public function __construct($CurrentInvoice_GetTermOfPaymentResult)
    {
      $this->CurrentInvoice_GetTermOfPaymentResult = $CurrentInvoice_GetTermOfPaymentResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getCurrentInvoice_GetTermOfPaymentResult()
    {
      return $this->CurrentInvoice_GetTermOfPaymentResult;
    }

    /**
     * @param TermOfPaymentHandle $CurrentInvoice_GetTermOfPaymentResult
     * @return \Economic\CurrentInvoice_GetTermOfPaymentResponse
     */
    public function setCurrentInvoice_GetTermOfPaymentResult($CurrentInvoice_GetTermOfPaymentResult)
    {
      $this->CurrentInvoice_GetTermOfPaymentResult = $CurrentInvoice_GetTermOfPaymentResult;
      return $this;
    }

}
