<?php

namespace Economic;

class CurrentInvoice_SetIsVatIncluded
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param boolean $value
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
     * @return \Economic\CurrentInvoice_SetIsVatIncluded
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\CurrentInvoice_SetIsVatIncluded
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
