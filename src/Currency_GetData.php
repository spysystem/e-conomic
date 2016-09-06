<?php

namespace Economic;

class Currency_GetData
{

    /**
     * @var CurrencyHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CurrencyHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CurrencyHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CurrencyHandle $entityHandle
     * @return \Economic\Currency_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
