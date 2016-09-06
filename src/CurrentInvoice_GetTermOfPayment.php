<?php

namespace Economic;

class CurrentInvoice_GetTermOfPayment
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
     * @return \Economic\CurrentInvoice_GetTermOfPayment
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

}
