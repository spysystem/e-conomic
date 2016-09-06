<?php

namespace Economic;

class ReportCode_GetParentCodeResponse
{

    /**
     * @var ReportCodeHandle $ReportCode_GetParentCodeResult
     */
    protected $ReportCode_GetParentCodeResult = null;

    /**
     * @param ReportCodeHandle $ReportCode_GetParentCodeResult
     */
    public function __construct($ReportCode_GetParentCodeResult)
    {
      $this->ReportCode_GetParentCodeResult = $ReportCode_GetParentCodeResult;
    }

    /**
     * @return ReportCodeHandle
     */
    public function getReportCode_GetParentCodeResult()
    {
      return $this->ReportCode_GetParentCodeResult;
    }

    /**
     * @param ReportCodeHandle $ReportCode_GetParentCodeResult
     * @return \Economic\ReportCode_GetParentCodeResponse
     */
    public function setReportCode_GetParentCodeResult($ReportCode_GetParentCodeResult)
    {
      $this->ReportCode_GetParentCodeResult = $ReportCode_GetParentCodeResult;
      return $this;
    }

}
