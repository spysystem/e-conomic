<?php

namespace Economic;

class ReportCode_GetData
{

    /**
     * @var ReportCodeHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ReportCodeHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ReportCodeHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ReportCodeHandle $entityHandle
     * @return \Economic\ReportCode_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
