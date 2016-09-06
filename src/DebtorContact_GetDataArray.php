<?php

namespace Economic;

class DebtorContact_GetDataArray
{

    /**
     * @var ArrayOfDebtorContactHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfDebtorContactHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfDebtorContactHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfDebtorContactHandle $entityHandles
     * @return \Economic\DebtorContact_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
