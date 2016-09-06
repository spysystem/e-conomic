<?php

namespace Economic;

class Account_GetDataArray
{

    /**
     * @var ArrayOfAccountHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfAccountHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfAccountHandle $entityHandles
     * @return \Economic\Account_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
