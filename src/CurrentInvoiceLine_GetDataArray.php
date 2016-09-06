<?php

namespace Economic;

class CurrentInvoiceLine_GetDataArray
{

    /**
     * @var ArrayOfCurrentInvoiceLineHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineHandle $entityHandles
     * @return \Economic\CurrentInvoiceLine_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
