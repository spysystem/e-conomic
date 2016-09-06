<?php

namespace Economic;

class DebtorContact_GetCommentsResponse
{

    /**
     * @var string $DebtorContact_GetCommentsResult
     */
    protected $DebtorContact_GetCommentsResult = null;

    /**
     * @param string $DebtorContact_GetCommentsResult
     */
    public function __construct($DebtorContact_GetCommentsResult)
    {
      $this->DebtorContact_GetCommentsResult = $DebtorContact_GetCommentsResult;
    }

    /**
     * @return string
     */
    public function getDebtorContact_GetCommentsResult()
    {
      return $this->DebtorContact_GetCommentsResult;
    }

    /**
     * @param string $DebtorContact_GetCommentsResult
     * @return \Economic\DebtorContact_GetCommentsResponse
     */
    public function setDebtorContact_GetCommentsResult($DebtorContact_GetCommentsResult)
    {
      $this->DebtorContact_GetCommentsResult = $DebtorContact_GetCommentsResult;
      return $this;
    }

}
