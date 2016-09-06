<?php

namespace Economic;

class CurrentInvoice_SetVatZone
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var ExtendedVatZoneHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param ExtendedVatZoneHandle $valueHandle
     */
    public function __construct($currentInvoiceHandle, $valueHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\CurrentInvoice_SetVatZone
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
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
     * @return \Economic\CurrentInvoice_SetVatZone
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
