<?php

namespace Economic;

class CurrentInvoice_SetTermOfPayment
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var TermOfPaymentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param TermOfPaymentHandle $valueHandle
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
     * @return \Economic\CurrentInvoice_SetTermOfPayment
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param TermOfPaymentHandle $valueHandle
     * @return \Economic\CurrentInvoice_SetTermOfPayment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
