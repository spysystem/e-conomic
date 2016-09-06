<?php

namespace Economic;

class CurrentSupplierInvoice_GetDataArray
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceHandle $entityHandles
     * @return \Economic\CurrentSupplierInvoice_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
