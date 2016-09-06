<?php

namespace Economic;

class CurrentInvoice_SetExchangeRate
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param float $value
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
     * @return \Economic\CurrentInvoice_SetExchangeRate
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Economic\CurrentInvoice_SetExchangeRate
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
