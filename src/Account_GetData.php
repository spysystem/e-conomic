<?php

namespace Economic;

class Account_GetData
{

    /**
     * @var AccountHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param AccountHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return AccountHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param AccountHandle $entityHandle
     * @return \Economic\Account_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
