<?php

namespace Economic;

class CurrentInvoiceLine_FindByCurrentInvoiceList
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $currentInvoiceHandles
     */
    protected $currentInvoiceHandles = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $currentInvoiceHandles
     */
    public function __construct($currentInvoiceHandles)
    {
      $this->currentInvoiceHandles = $currentInvoiceHandles;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getCurrentInvoiceHandles()
    {
      return $this->currentInvoiceHandles;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $currentInvoiceHandles
     * @return \Economic\CurrentInvoiceLine_FindByCurrentInvoiceList
     */
    public function setCurrentInvoiceHandles($currentInvoiceHandles)
    {
      $this->currentInvoiceHandles = $currentInvoiceHandles;
      return $this;
    }

}
