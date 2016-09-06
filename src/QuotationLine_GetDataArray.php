<?php

namespace Economic;

class QuotationLine_GetDataArray
{

    /**
     * @var ArrayOfQuotationLineHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfQuotationLineHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfQuotationLineHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfQuotationLineHandle $entityHandles
     * @return \Economic\QuotationLine_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
