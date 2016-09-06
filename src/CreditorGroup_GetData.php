<?php

namespace Economic;

class CreditorGroup_GetData
{

    /**
     * @var CreditorGroupHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CreditorGroupHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CreditorGroupHandle $entityHandle
     * @return \Economic\CreditorGroup_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
