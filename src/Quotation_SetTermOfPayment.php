<?php

namespace Economic;

class Quotation_SetTermOfPayment
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var TermOfPaymentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param TermOfPaymentHandle $valueHandle
     */
    public function __construct($quotationHandle, $valueHandle)
    {
      $this->quotationHandle = $quotationHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotationHandle()
    {
      return $this->quotationHandle;
    }

    /**
     * @param QuotationHandle $quotationHandle
     * @return \Economic\Quotation_SetTermOfPayment
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param TermOfPaymentHandle $valueHandle
     * @return \Economic\Quotation_SetTermOfPayment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
