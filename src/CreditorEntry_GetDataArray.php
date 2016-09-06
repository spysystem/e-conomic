<?php

namespace Economic;

class CreditorEntry_GetDataArray
{

    /**
     * @var ArrayOfCreditorEntryHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCreditorEntryHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $entityHandles
     * @return \Economic\CreditorEntry_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
