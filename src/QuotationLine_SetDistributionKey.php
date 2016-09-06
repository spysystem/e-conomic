<?php

namespace Economic;

class QuotationLine_SetDistributionKey
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var DistributionKeyHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param DistributionKeyHandle $valueHandle
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
     * @return \Economic\QuotationLine_SetDistributionKey
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      return $this;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DistributionKeyHandle $valueHandle
     * @return \Economic\QuotationLine_SetDistributionKey
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
