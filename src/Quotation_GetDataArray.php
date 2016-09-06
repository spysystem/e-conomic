<?php

namespace Economic;

class Quotation_GetDataArray
{

    /**
     * @var ArrayOfQuotationHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfQuotationHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfQuotationHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfQuotationHandle $entityHandles
     * @return \Economic\Quotation_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
