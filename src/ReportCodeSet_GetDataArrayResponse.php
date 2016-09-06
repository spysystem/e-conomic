<?php

namespace Economic;

class ReportCodeSet_GetDataArrayResponse
{

    /**
     * @var ArrayOfReportCodeSetData $ReportCodeSet_GetDataArrayResult
     */
    protected $ReportCodeSet_GetDataArrayResult = null;

    /**
     * @param ArrayOfReportCodeSetData $ReportCodeSet_GetDataArrayResult
     */
    public function __construct($ReportCodeSet_GetDataArrayResult)
    {
      $this->ReportCodeSet_GetDataArrayResult = $ReportCodeSet_GetDataArrayResult;
    }

    /**
     * @return ArrayOfReportCodeSetData
     */
    public function getReportCodeSet_GetDataArrayResult()
    {
      return $this->ReportCodeSet_GetDataArrayResult;
    }

    /**
     * @param ArrayOfReportCodeSetData $ReportCodeSet_GetDataArrayResult
     * @return \Economic\ReportCodeSet_GetDataArrayResponse
     */
    public function setReportCodeSet_GetDataArrayResult($ReportCodeSet_GetDataArrayResult)
    {
      $this->ReportCodeSet_GetDataArrayResult = $ReportCodeSet_GetDataArrayResult;
      return $this;
    }

}
