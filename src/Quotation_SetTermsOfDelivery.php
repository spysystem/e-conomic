<?php

namespace Economic;

class Quotation_SetTermsOfDelivery
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param string $value
     */
    public function __construct($quotationHandle, $value)
    {
      $this->quotationHandle = $quotationHandle;
      $this->value = $value;
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
     * @return \Economic\Quotation_SetTermsOfDelivery
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Quotation_SetTermsOfDelivery
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
