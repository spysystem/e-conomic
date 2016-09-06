<?php

namespace Economic;

class CurrentInvoice_SetLayout
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var TemplateCollectionHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param TemplateCollectionHandle $valueHandle
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
     * @return \Economic\CurrentInvoice_SetLayout
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param TemplateCollectionHandle $valueHandle
     * @return \Economic\CurrentInvoice_SetLayout
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
