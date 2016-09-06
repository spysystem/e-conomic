<?php

namespace Economic;

class VatAccount_GetData
{

    /**
     * @var VatAccountHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param VatAccountHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return VatAccountHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param VatAccountHandle $entityHandle
     * @return \Economic\VatAccount_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
