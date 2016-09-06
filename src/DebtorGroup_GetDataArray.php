<?php

namespace Economic;

class DebtorGroup_GetDataArray
{

    /**
     * @var ArrayOfDebtorGroupHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDebtorGroupHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDebtorGroupHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDebtorGroupHandle $entityHandles
     * @return \Economic\DebtorGroup_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
