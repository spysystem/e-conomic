<?php

namespace Economic;

class QuotationLine_SetUnit
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var UnitHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param UnitHandle $valueHandle
     */
    public function __construct($quotationLineHandle, $valueHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\QuotationLine_SetUnit
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param UnitHandle $valueHandle
     * @return \Economic\QuotationLine_SetUnit
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
