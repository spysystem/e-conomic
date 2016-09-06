<?php

namespace Economic;

class Company_GetDataArray
{

    /**
     * @var ArrayOfCompanyHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfCompanyHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfCompanyHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfCompanyHandle $entityHandles
     * @return \Economic\Company_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
