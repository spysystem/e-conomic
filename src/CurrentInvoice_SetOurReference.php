<?php

namespace Economic;

class CurrentInvoice_SetOurReference
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var EmployeeHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param EmployeeHandle $valueHandle
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
     * @return \Economic\CurrentInvoice_SetOurReference
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param EmployeeHandle $valueHandle
     * @return \Economic\CurrentInvoice_SetOurReference
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
