<?php

namespace Economic;

class Quotation_GetData
{

    /**
     * @var QuotationHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param QuotationHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return QuotationHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param QuotationHandle $entityHandle
     * @return \Economic\Quotation_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
