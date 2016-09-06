<?php

namespace Economic;

class ReportCodeSet_FindByNameResponse
{

    /**
     * @var ArrayOfReportCodeSetHandle $ReportCodeSet_FindByNameResult
     */
    protected $ReportCodeSet_FindByNameResult = null;

    /**
     * @param ArrayOfReportCodeSetHandle $ReportCodeSet_FindByNameResult
     */
    public function __construct($ReportCodeSet_FindByNameResult)
    {
      $this->ReportCodeSet_FindByNameResult = $ReportCodeSet_FindByNameResult;
    }

    /**
     * @return ArrayOfReportCodeSetHandle
     */
    public function getReportCodeSet_FindByNameResult()
    {
      return $this->ReportCodeSet_FindByNameResult;
    }

    /**
     * @param ArrayOfReportCodeSetHandle $ReportCodeSet_FindByNameResult
     * @return \Economic\ReportCodeSet_FindByNameResponse
     */
    public function setReportCodeSet_FindByNameResult($ReportCodeSet_FindByNameResult)
    {
      $this->ReportCodeSet_FindByNameResult = $ReportCodeSet_FindByNameResult;
      return $this;
    }

}
