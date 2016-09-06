<?php

namespace Economic;

class Invoice_GetTermOfPaymentResponse
{

    /**
     * @var TermOfPaymentHandle $Invoice_GetTermOfPaymentResult
     */
    protected $Invoice_GetTermOfPaymentResult = null;

    /**
     * @param TermOfPaymentHandle $Invoice_GetTermOfPaymentResult
     */
    public function __construct($Invoice_GetTermOfPaymentResult)
    {
      $this->Invoice_GetTermOfPaymentResult = $Invoice_GetTermOfPaymentResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getInvoice_GetTermOfPaymentResult()
    {
      return $this->Invoice_GetTermOfPaymentResult;
    }

    /**
     * @param TermOfPaymentHandle $Invoice_GetTermOfPaymentResult
     * @return \Economic\Invoice_GetTermOfPaymentResponse
     */
    public function setInvoice_GetTermOfPaymentResult($Invoice_GetTermOfPaymentResult)
    {
      $this->Invoice_GetTermOfPaymentResult = $Invoice_GetTermOfPaymentResult;
      return $this;
    }

}
