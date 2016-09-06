<?php

namespace Economic;

class ReportCode_GetDataArrayResponse
{

    /**
     * @var ArrayOfReportCodeData $ReportCode_GetDataArrayResult
     */
    protected $ReportCode_GetDataArrayResult = null;

    /**
     * @param ArrayOfReportCodeData $ReportCode_GetDataArrayResult
     */
    public function __construct($ReportCode_GetDataArrayResult)
    {
      $this->ReportCode_GetDataArrayResult = $ReportCode_GetDataArrayResult;
    }

    /**
     * @return ArrayOfReportCodeData
     */
    public function getReportCode_GetDataArrayResult()
    {
      return $this->ReportCode_GetDataArrayResult;
    }

    /**
     * @param ArrayOfReportCodeData $ReportCode_GetDataArrayResult
     * @return \Economic\ReportCode_GetDataArrayResponse
     */
    public function setReportCode_GetDataArrayResult($ReportCode_GetDataArrayResult)
    {
      $this->ReportCode_GetDataArrayResult = $ReportCode_GetDataArrayResult;
      return $this;
    }

}
