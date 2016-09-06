<?php

namespace Economic;

class QuotationLine_SetDescription
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param string $value
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
     * @return \Economic\QuotationLine_SetDescription
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
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
     * @return \Economic\QuotationLine_SetDescription
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
