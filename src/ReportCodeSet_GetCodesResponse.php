<?php

namespace Economic;

class ReportCodeSet_GetCodesResponse
{

    /**
     * @var ArrayOfReportCodeHandle $ReportCodeSet_GetCodesResult
     */
    protected $ReportCodeSet_GetCodesResult = null;

    /**
     * @param ArrayOfReportCodeHandle $ReportCodeSet_GetCodesResult
     */
    public function __construct($ReportCodeSet_GetCodesResult)
    {
      $this->ReportCodeSet_GetCodesResult = $ReportCodeSet_GetCodesResult;
    }

    /**
     * @return ArrayOfReportCodeHandle
     */
    public function getReportCodeSet_GetCodesResult()
    {
      return $this->ReportCodeSet_GetCodesResult;
    }

    /**
     * @param ArrayOfReportCodeHandle $ReportCodeSet_GetCodesResult
     * @return \Economic\ReportCodeSet_GetCodesResponse
     */
    public function setReportCodeSet_GetCodesResult($ReportCodeSet_GetCodesResult)
    {
      $this->ReportCodeSet_GetCodesResult = $ReportCodeSet_GetCodesResult;
      return $this;
    }

}
