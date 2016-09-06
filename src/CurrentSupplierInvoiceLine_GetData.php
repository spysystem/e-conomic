<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetData
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CurrentSupplierInvoiceLineHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CurrentSupplierInvoiceLineHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CurrentSupplierInvoiceLineHandle $entityHandle
     * @return \Economic\CurrentSupplierInvoiceLine_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
