<?php

namespace Economic;

class CurrentInvoiceLine_SetQuantity
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @param float $value
     */
    public function __construct($currentInvoiceLineHandle, $value)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      $this->value = $value;
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
     * @return \Economic\CurrentInvoiceLine_SetQuantity
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
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
     * @return \Economic\CurrentInvoiceLine_SetQuantity
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
