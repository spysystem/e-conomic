<?php

namespace Economic;

class Quotation_GetTermsOfDelivery
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @param QuotationHandle $quotationHandle
     */
    public function __construct($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
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
     * @return \Economic\Quotation_GetTermsOfDelivery
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

}
