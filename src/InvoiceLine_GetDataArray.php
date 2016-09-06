<?php

namespace Economic;

class InvoiceLine_GetDataArray
{

    /**
     * @var ArrayOfInvoiceLineHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfInvoiceLineHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfInvoiceLineHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfInvoiceLineHandle $entityHandles
     * @return \Economic\InvoiceLine_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
