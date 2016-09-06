<?php

namespace Economic;

class Invoice_GetDataArray
{

    /**
     * @var ArrayOfInvoiceHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfInvoiceHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfInvoiceHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfInvoiceHandle $entityHandles
     * @return \Economic\Invoice_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
