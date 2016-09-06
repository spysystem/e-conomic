<?php

namespace Economic;

class CurrentInvoiceLine_GetData
{

    /**
     * @var CurrentInvoiceLineHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CurrentInvoiceLineHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CurrentInvoiceLineHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CurrentInvoiceLineHandle $entityHandle
     * @return \Economic\CurrentInvoiceLine_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
