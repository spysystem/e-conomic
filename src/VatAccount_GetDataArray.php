<?php

namespace Economic;

class VatAccount_GetDataArray
{

    /**
     * @var ArrayOfVatAccountHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfVatAccountHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfVatAccountHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfVatAccountHandle $entityHandles
     * @return \Economic\VatAccount_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
