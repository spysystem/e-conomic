<?php

namespace Economic;

class InvoiceLine_GetData
{

    /**
     * @var InvoiceLineHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param InvoiceLineHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return InvoiceLineHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param InvoiceLineHandle $entityHandle
     * @return \Economic\InvoiceLine_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
