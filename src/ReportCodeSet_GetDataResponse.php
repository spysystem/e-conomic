<?php

namespace Economic;

class ReportCodeSet_GetDataResponse
{

    /**
     * @var ReportCodeSetData $ReportCodeSet_GetDataResult
     */
    protected $ReportCodeSet_GetDataResult = null;

    /**
     * @param ReportCodeSetData $ReportCodeSet_GetDataResult
     */
    public function __construct($ReportCodeSet_GetDataResult)
    {
      $this->ReportCodeSet_GetDataResult = $ReportCodeSet_GetDataResult;
    }

    /**
     * @return ReportCodeSetData
     */
    public function getReportCodeSet_GetDataResult()
    {
      return $this->ReportCodeSet_GetDataResult;
    }

    /**
     * @param ReportCodeSetData $ReportCodeSet_GetDataResult
     * @return \Economic\ReportCodeSet_GetDataResponse
     */
    public function setReportCodeSet_GetDataResult($ReportCodeSet_GetDataResult)
    {
      $this->ReportCodeSet_GetDataResult = $ReportCodeSet_GetDataResult;
      return $this;
    }

}
