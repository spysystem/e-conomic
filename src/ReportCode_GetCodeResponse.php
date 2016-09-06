<?php

namespace Economic;

class ReportCode_GetCodeResponse
{

    /**
     * @var string $ReportCode_GetCodeResult
     */
    protected $ReportCode_GetCodeResult = null;

    /**
     * @param string $ReportCode_GetCodeResult
     */
    public function __construct($ReportCode_GetCodeResult)
    {
      $this->ReportCode_GetCodeResult = $ReportCode_GetCodeResult;
    }

    /**
     * @return string
     */
    public function getReportCode_GetCodeResult()
    {
      return $this->ReportCode_GetCodeResult;
    }

    /**
     * @param string $ReportCode_GetCodeResult
     * @return \Economic\ReportCode_GetCodeResponse
     */
    public function setReportCode_GetCodeResult($ReportCode_GetCodeResult)
    {
      $this->ReportCode_GetCodeResult = $ReportCode_GetCodeResult;
      return $this;
    }

}
