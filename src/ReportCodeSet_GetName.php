<?php

namespace Economic;

class ReportCodeSet_GetName
{

    /**
     * @var ReportCodeSetHandle $reportCodeSetHandle
     */
    protected $reportCodeSetHandle = null;

    /**
     * @param ReportCodeSetHandle $reportCodeSetHandle
     */
    public function __construct($reportCodeSetHandle)
    {
      $this->reportCodeSetHandle = $reportCodeSetHandle;
    }

    /**
     * @return ReportCodeSetHandle
     */
    public function getReportCodeSetHandle()
    {
      return $this->reportCodeSetHandle;
    }

    /**
     * @param ReportCodeSetHandle $reportCodeSetHandle
     * @return \Economic\ReportCodeSet_GetName
     */
    public function setReportCodeSetHandle($reportCodeSetHandle)
    {
      $this->reportCodeSetHandle = $reportCodeSetHandle;
      return $this;
    }

}
