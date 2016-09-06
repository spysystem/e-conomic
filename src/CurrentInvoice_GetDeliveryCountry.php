<?php

namespace Economic;

class CurrentInvoice_GetDeliveryCountry
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     */
    public function __construct($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getCurrentInvoiceHandle()
    {
      return $this->currentInvoiceHandle;
    }

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @return \Economic\CurrentInvoice_GetDeliveryCountry
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

}
