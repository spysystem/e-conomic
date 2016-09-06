<?php

namespace Economic;

class Debtor_GetData
{

    /**
     * @var DebtorHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param DebtorHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return DebtorHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param DebtorHandle $entityHandle
     * @return \Economic\Debtor_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
