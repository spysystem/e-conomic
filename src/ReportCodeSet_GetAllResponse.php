<?php

namespace Economic;

class ReportCodeSet_GetAllResponse
{

    /**
     * @var ArrayOfReportCodeSetHandle $ReportCodeSet_GetAllResult
     */
    protected $ReportCodeSet_GetAllResult = null;

    /**
     * @param ArrayOfReportCodeSetHandle $ReportCodeSet_GetAllResult
     */
    public function __construct($ReportCodeSet_GetAllResult)
    {
      $this->ReportCodeSet_GetAllResult = $ReportCodeSet_GetAllResult;
    }

    /**
     * @return ArrayOfReportCodeSetHandle
     */
    public function getReportCodeSet_GetAllResult()
    {
      return $this->ReportCodeSet_GetAllResult;
    }

    /**
     * @param ArrayOfReportCodeSetHandle $ReportCodeSet_GetAllResult
     * @return \Economic\ReportCodeSet_GetAllResponse
     */
    public function setReportCodeSet_GetAllResult($ReportCodeSet_GetAllResult)
    {
      $this->ReportCodeSet_GetAllResult = $ReportCodeSet_GetAllResult;
      return $this;
    }

}
