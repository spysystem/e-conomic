<?php

namespace Economic;

class CurrentInvoice_GetDataArray
{

    /**
     * @var ArrayOfCurrentInvoiceHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCurrentInvoiceHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCurrentInvoiceHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCurrentInvoiceHandle $entityHandles
     * @return \Economic\CurrentInvoice_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
