<?php

namespace Economic;

class Quotation_SetYourReference
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var DebtorContactHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param DebtorContactHandle $valueHandle
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
     * @return \Economic\Quotation_SetYourReference
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DebtorContactHandle $valueHandle
     * @return \Economic\Quotation_SetYourReference
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
