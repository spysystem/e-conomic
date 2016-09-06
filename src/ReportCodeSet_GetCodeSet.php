<?php

namespace Economic;

class ReportCodeSet_GetCodeSet
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
     * @return \Economic\ReportCodeSet_GetCodeSet
     */
    public function setReportCodeSetHandle($reportCodeSetHandle)
    {
      $this->reportCodeSetHandle = $reportCodeSetHandle;
      return $this;
    }

}
