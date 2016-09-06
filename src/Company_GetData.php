<?php

namespace Economic;

class Company_GetData
{

    /**
     * @var CompanyHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param CompanyHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return CompanyHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param CompanyHandle $entityHandle
     * @return \Economic\Company_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
