<?php

namespace Economic;

class ReportCodeSet_GetNameResponse
{

    /**
     * @var string $ReportCodeSet_GetNameResult
     */
    protected $ReportCodeSet_GetNameResult = null;

    /**
     * @param string $ReportCodeSet_GetNameResult
     */
    public function __construct($ReportCodeSet_GetNameResult)
    {
      $this->ReportCodeSet_GetNameResult = $ReportCodeSet_GetNameResult;
    }

    /**
     * @return string
     */
    public function getReportCodeSet_GetNameResult()
    {
      return $this->ReportCodeSet_GetNameResult;
    }

    /**
     * @param string $ReportCodeSet_GetNameResult
     * @return \Economic\ReportCodeSet_GetNameResponse
     */
    public function setReportCodeSet_GetNameResult($ReportCodeSet_GetNameResult)
    {
      $this->ReportCodeSet_GetNameResult = $ReportCodeSet_GetNameResult;
      return $this;
    }

}
