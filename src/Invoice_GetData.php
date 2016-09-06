<?php

namespace Economic;

class Invoice_GetData
{

    /**
     * @var InvoiceHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param InvoiceHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return InvoiceHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param InvoiceHandle $entityHandle
     * @return \Economic\Invoice_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
