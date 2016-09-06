<?php

namespace Economic;

class CurrentInvoice_SetOtherReference
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param string $value
     */
    public function __construct($currentInvoiceHandle, $value)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      $this->value = $value;
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
     * @return \Economic\CurrentInvoice_SetOtherReference
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\CurrentInvoice_SetOtherReference
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
