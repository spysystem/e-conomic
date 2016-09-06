<?php

namespace Economic;

class Creditor_GetData
{

    /**
     * @var CreditorHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CreditorHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CreditorHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CreditorHandle $entityHandle
     * @return \Economic\Creditor_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
