<?php

namespace Economic;

class Quotation_SetVatZone
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var ExtendedVatZoneHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param ExtendedVatZoneHandle $valueHandle
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
     * @return \Economic\Quotation_SetVatZone
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ExtendedVatZoneHandle $valueHandle
     * @return \Economic\Quotation_SetVatZone
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
