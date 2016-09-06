<?php

namespace Economic;

class CurrentInvoice_SetDebtor
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var DebtorHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param DebtorHandle $valueHandle
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
     * @return \Economic\CurrentInvoice_SetDebtor
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DebtorHandle $valueHandle
     * @return \Economic\CurrentInvoice_SetDebtor
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
