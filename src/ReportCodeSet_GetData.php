<?php

namespace Economic;

class ReportCodeSet_GetData
{

    /**
     * @var ReportCodeSetHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param ReportCodeSetHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return ReportCodeSetHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param ReportCodeSetHandle $entityHandle
     * @return \Economic\ReportCodeSet_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
