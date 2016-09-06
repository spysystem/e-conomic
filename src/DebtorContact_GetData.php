<?php

namespace Economic;

class DebtorContact_GetData
{

    /**
     * @var DebtorContactHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DebtorContactHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DebtorContactHandle $entityHandle
     * @return \Economic\DebtorContact_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
