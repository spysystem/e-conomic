<?php

namespace Economic;

class Creditor_GetDataArray
{

    /**
     * @var ArrayOfCreditorHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCreditorHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCreditorHandle $entityHandles
     * @return \Economic\Creditor_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
