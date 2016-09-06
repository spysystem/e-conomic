<?php

namespace Economic;

class CurrentInvoiceLine_SetProduct
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @var ProductHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @param ProductHandle $valueHandle
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
     * @return \Economic\CurrentInvoiceLine_SetProduct
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param ProductHandle $valueHandle
     * @return \Economic\CurrentInvoiceLine_SetProduct
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
