<?php

namespace Economic;

class ReportCodeSet_GetCodeSetResponse
{

    /**
     * @var int $ReportCodeSet_GetCodeSetResult
     */
    protected $ReportCodeSet_GetCodeSetResult = null;

    /**
     * @param int $ReportCodeSet_GetCodeSetResult
     */
    public function __construct($ReportCodeSet_GetCodeSetResult)
    {
      $this->ReportCodeSet_GetCodeSetResult = $ReportCodeSet_GetCodeSetResult;
    }

    /**
     * @return int
     */
    public function getReportCodeSet_GetCodeSetResult()
    {
      return $this->ReportCodeSet_GetCodeSetResult;
    }

    /**
     * @param int $ReportCodeSet_GetCodeSetResult
     * @return \Economic\ReportCodeSet_GetCodeSetResponse
     */
    public function setReportCodeSet_GetCodeSetResult($ReportCodeSet_GetCodeSetResult)
    {
      $this->ReportCodeSet_GetCodeSetResult = $ReportCodeSet_GetCodeSetResult;
      return $this;
    }

}
