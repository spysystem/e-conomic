<?php

namespace Economic;

class Currency_GetDataArray
{

    /**
     * @var ArrayOfCurrencyHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCurrencyHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCurrencyHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCurrencyHandle $entityHandles
     * @return \Economic\Currency_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
