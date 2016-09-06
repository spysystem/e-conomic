<?php

namespace Economic;

class Quotation_SetDeliveryLocation
{

    /**
     * @var QuotationHandle $quotationHandle
     */
    protected $quotationHandle = null;

    /**
     * @var DeliveryLocationHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param QuotationHandle $quotationHandle
     * @param DeliveryLocationHandle $valueHandle
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
     * @return \Economic\Quotation_SetDeliveryLocation
     */
    public function setQuotationHandle($quotationHandle)
    {
      $this->quotationHandle = $quotationHandle;
      return $this;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DeliveryLocationHandle $valueHandle
     * @return \Economic\Quotation_SetDeliveryLocation
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
