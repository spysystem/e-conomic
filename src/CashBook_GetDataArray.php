<?php

namespace Economic;

class CashBook_GetDataArray
{

    /**
     * @var ArrayOfCashBookHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCashBookHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCashBookHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCashBookHandle $entityHandles
     * @return \Economic\CashBook_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
