<?php

namespace Economic;

class CurrentInvoice_GetPdf
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
     * @return \Economic\CurrentInvoice_GetPdf
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

}
