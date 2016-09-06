<?php

namespace Economic;

class CurrentSupplierInvoice_GetData
{

    /**
     * @var CurrentSupplierInvoiceHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CurrentSupplierInvoiceHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $entityHandle
     * @return \Economic\CurrentSupplierInvoice_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
