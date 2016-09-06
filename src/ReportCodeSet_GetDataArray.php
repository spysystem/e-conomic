<?php

namespace Economic;

class ReportCodeSet_GetDataArray
{

    /**
     * @var ArrayOfReportCodeSetHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfReportCodeSetHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfReportCodeSetHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfReportCodeSetHandle $entityHandles
     * @return \Economic\ReportCodeSet_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
