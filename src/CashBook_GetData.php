<?php

namespace Economic;

class CashBook_GetData
{

    /**
     * @var CashBookHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CashBookHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CashBookHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CashBookHandle $entityHandle
     * @return \Economic\CashBook_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
