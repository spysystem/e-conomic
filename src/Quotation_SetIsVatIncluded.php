<?php

namespace Economic;

class Quotation_SetIsVatIncluded
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param boolean $value
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
     * @return \Economic\Quotation_SetIsVatIncluded
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\Quotation_SetIsVatIncluded
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
