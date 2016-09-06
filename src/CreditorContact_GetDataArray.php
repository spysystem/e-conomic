<?php

namespace Economic;

class CreditorContact_GetDataArray
{

    /**
     * @var ArrayOfCreditorContactHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCreditorContactHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCreditorContactHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCreditorContactHandle $entityHandles
     * @return \Economic\CreditorContact_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
