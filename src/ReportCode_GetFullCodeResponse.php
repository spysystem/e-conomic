<?php

namespace Economic;

class ReportCode_GetFullCodeResponse
{

    /**
     * @var string $ReportCode_GetFullCodeResult
     */
    protected $ReportCode_GetFullCodeResult = null;

    /**
     * @param string $ReportCode_GetFullCodeResult
     */
    public function __construct($ReportCode_GetFullCodeResult)
    {
      $this->ReportCode_GetFullCodeResult = $ReportCode_GetFullCodeResult;
    }

    /**
     * @return string
     */
    public function getReportCode_GetFullCodeResult()
    {
      return $this->ReportCode_GetFullCodeResult;
    }

    /**
     * @param string $ReportCode_GetFullCodeResult
     * @return \Economic\ReportCode_GetFullCodeResponse
     */
    public function setReportCode_GetFullCodeResult($ReportCode_GetFullCodeResult)
    {
      $this->ReportCode_GetFullCodeResult = $ReportCode_GetFullCodeResult;
      return $this;
    }

}
