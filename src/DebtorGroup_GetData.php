<?php

namespace Economic;

class DebtorGroup_GetData
{

    /**
     * @var DebtorGroupHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DebtorGroupHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DebtorGroupHandle $entityHandle
     * @return \Economic\DebtorGroup_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
