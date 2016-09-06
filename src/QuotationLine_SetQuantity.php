<?php

namespace Economic;

class QuotationLine_SetQuantity
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param float $value
     */
    public function __construct($quotationLineHandle, $value)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      $this->value = $value;
    }

    /**
     * @return QuotationLineHandle
     */
    public function getQuotationLineHandle()
    {
      return $this->quotationLineHandle;
    }

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @return \Economic\QuotationLine_SetQuantity
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
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
     * @return \Economic\QuotationLine_SetQuantity
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
