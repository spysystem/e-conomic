<?php

namespace Economic;

class DebtorContact_GetEmailResponse
{

    /**
     * @var string $DebtorContact_GetEmailResult
     */
    protected $DebtorContact_GetEmailResult = null;

    /**
     * @param string $DebtorContact_GetEmailResult
     */
    public function __construct($DebtorContact_GetEmailResult)
    {
      $this->DebtorContact_GetEmailResult = $DebtorContact_GetEmailResult;
    }

    /**
     * @return string
     */
    public function getDebtorContact_GetEmailResult()
    {
      return $this->DebtorContact_GetEmailResult;
    }

    /**
     * @param string $DebtorContact_GetEmailResult
     * @return \Economic\DebtorContact_GetEmailResponse
     */
    public function setDebtorContact_GetEmailResult($DebtorContact_GetEmailResult)
    {
      $this->DebtorContact_GetEmailResult = $DebtorContact_GetEmailResult;
      return $this;
    }

}
