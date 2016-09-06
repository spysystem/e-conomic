<?php

namespace Economic;

class CreditorContact_GetData
{

    /**
     * @var CreditorContactHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CreditorContactHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CreditorContactHandle $entityHandle
     * @return \Economic\CreditorContact_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
