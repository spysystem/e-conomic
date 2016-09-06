<?php

namespace Economic;

class CreditorGroup_GetDataArray
{

    /**
     * @var ArrayOfCreditorGroupHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCreditorGroupHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCreditorGroupHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCreditorGroupHandle $entityHandles
     * @return \Economic\CreditorGroup_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
