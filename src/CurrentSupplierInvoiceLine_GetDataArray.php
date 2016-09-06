<?php

namespace Economic;

class CurrentSupplierInvoiceLine_GetDataArray
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceLineHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceLineHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineHandle $entityHandles
     * @return \Economic\CurrentSupplierInvoiceLine_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
