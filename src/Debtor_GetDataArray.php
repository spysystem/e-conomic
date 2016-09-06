<?php

namespace Economic;

class Debtor_GetDataArray
{

    /**
     * @var ArrayOfDebtorHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDebtorHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDebtorHandle $entityHandles
     * @return \Economic\Debtor_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
