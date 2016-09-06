<?php

namespace Economic;

class QuotationLine_GetData
{

    /**
     * @var QuotationLineHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param QuotationLineHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return QuotationLineHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param QuotationLineHandle $entityHandle
     * @return \Economic\QuotationLine_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
