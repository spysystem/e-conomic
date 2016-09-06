<?php

namespace Economic;

class CurrentInvoiceLine_SetUnit
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @var UnitHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @param UnitHandle $valueHandle
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
     * @return \Economic\CurrentInvoiceLine_SetUnit
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param UnitHandle $valueHandle
     * @return \Economic\CurrentInvoiceLine_SetUnit
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
