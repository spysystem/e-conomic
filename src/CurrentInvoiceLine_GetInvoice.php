<?php

namespace Economic;

class CurrentInvoiceLine_GetInvoice
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    public function __construct($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
    }

    /**
     * @return CurrentInvoiceLineHandle
     */
    public function getCurrentInvoiceLineHandle()
    {
      return $this->currentInvoiceLineHandle;
    }

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @return \Economic\CurrentInvoiceLine_GetInvoice
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      return $this;
    }

}
