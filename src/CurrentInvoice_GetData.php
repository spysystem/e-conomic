<?php

namespace Economic;

class CurrentInvoice_GetData
{

    /**
     * @var CurrentInvoiceHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CurrentInvoiceHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CurrentInvoiceHandle $entityHandle
     * @return \Economic\CurrentInvoice_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
