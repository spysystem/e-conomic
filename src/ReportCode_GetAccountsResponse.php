<?php

namespace Economic;

class ReportCode_GetAccountsResponse
{

    /**
     * @var ArrayOfAccountHandle $ReportCode_GetAccountsResult
     */
    protected $ReportCode_GetAccountsResult = null;

    /**
     * @param ArrayOfAccountHandle $ReportCode_GetAccountsResult
     */
    public function __construct($ReportCode_GetAccountsResult)
    {
      $this->ReportCode_GetAccountsResult = $ReportCode_GetAccountsResult;
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getReportCode_GetAccountsResult()
    {
      return $this->ReportCode_GetAccountsResult;
    }

    /**
     * @param ArrayOfAccountHandle $ReportCode_GetAccountsResult
     * @return \Economic\ReportCode_GetAccountsResponse
     */
    public function setReportCode_GetAccountsResult($ReportCode_GetAccountsResult)
    {
      $this->ReportCode_GetAccountsResult = $ReportCode_GetAccountsResult;
      return $this;
    }

}
