<?php

namespace Economic;

class QuotationLine_SetProduct
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var ProductHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param ProductHandle $valueHandle
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
     * @return \Economic\QuotationLine_SetProduct
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProductHandle $valueHandle
     * @return \Economic\QuotationLine_SetProduct
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
