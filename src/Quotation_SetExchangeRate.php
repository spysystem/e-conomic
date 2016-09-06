<?php

namespace Economic;

class Quotation_SetExchangeRate
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param float $value
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
     * @return \Economic\Quotation_SetExchangeRate
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\Quotation_SetExchangeRate
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
