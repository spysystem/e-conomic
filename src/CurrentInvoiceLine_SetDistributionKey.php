<?php

namespace Economic;

class CurrentInvoiceLine_SetDistributionKey
{

    /**
     * @var CurrentInvoiceLineHandle $currentInvoiceLineHandle
     */
    protected $currentInvoiceLineHandle = null;

    /**
     * @var DistributionKeyHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceLineHandle $currentInvoiceLineHandle
     * @param DistributionKeyHandle $valueHandle
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
     * @return \Economic\CurrentInvoiceLine_SetDistributionKey
     */
    public function setCurrentInvoiceLineHandle($currentInvoiceLineHandle)
    {
      $this->currentInvoiceLineHandle = $currentInvoiceLineHandle;
      return $this;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DistributionKeyHandle $valueHandle
     * @return \Economic\CurrentInvoiceLine_SetDistributionKey
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
