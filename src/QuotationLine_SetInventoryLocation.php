<?php

namespace Economic;

class QuotationLine_SetInventoryLocation
{

    /**
     * @var QuotationLineHandle $quotationLineHandle
     */
    protected $quotationLineHandle = null;

    /**
     * @var InventoryLocationHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationLineHandle $quotationLineHandle
     * @param InventoryLocationHandle $valueHandle
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
     * @return \Economic\QuotationLine_SetInventoryLocation
     */
    public function setQuotationLineHandle($quotationLineHandle)
    {
      $this->quotationLineHandle = $quotationLineHandle;
      return $this;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param InventoryLocationHandle $valueHandle
     * @return \Economic\QuotationLine_SetInventoryLocation
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
