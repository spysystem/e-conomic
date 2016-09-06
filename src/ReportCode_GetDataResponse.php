<?php

namespace Economic;

class ReportCode_GetDataResponse
{

    /**
     * @var ReportCodeData $ReportCode_GetDataResult
     */
    protected $ReportCode_GetDataResult = null;

    /**
     * @param ReportCodeData $ReportCode_GetDataResult
     */
    public function __construct($ReportCode_GetDataResult)
    {
      $this->ReportCode_GetDataResult = $ReportCode_GetDataResult;
    }

    /**
     * @return ReportCodeData
     */
    public function getReportCode_GetDataResult()
    {
      return $this->ReportCode_GetDataResult;
    }

    /**
     * @param ReportCodeData $ReportCode_GetDataResult
     * @return \Economic\ReportCode_GetDataResponse
     */
    public function setReportCode_GetDataResult($ReportCode_GetDataResult)
    {
      $this->ReportCode_GetDataResult = $ReportCode_GetDataResult;
      return $this;
    }

}
