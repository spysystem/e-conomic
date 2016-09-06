<?php

namespace Economic;

class CurrentInvoiceLine_SetInventoryLocation
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @var InventoryLocationHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @param InventoryLocationHandle $valueHandle
     */
    public function __construct($currentInvoiceLineHandle, $valueHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\CurrentInvoiceLine_SetInventoryLocation
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
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
     * @return \Economic\CurrentInvoiceLine_SetInventoryLocation
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
