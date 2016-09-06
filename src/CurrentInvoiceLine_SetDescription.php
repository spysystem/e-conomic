<?php

namespace Economic;

class CurrentInvoiceLine_SetDescription
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @param string $value
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
     * @return \Economic\CurrentInvoiceLine_SetDescription
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
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
     * @return \Economic\CurrentInvoiceLine_SetDescription
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
