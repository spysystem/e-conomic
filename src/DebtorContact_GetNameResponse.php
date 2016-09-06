<?php

namespace Economic;

class DebtorContact_GetNameResponse
{

    /**
     * @var string $DebtorContact_GetNameResult
     */
    protected $DebtorContact_GetNameResult = null;

    /**
     * @param string $DebtorContact_GetNameResult
     */
    public function __construct($DebtorContact_GetNameResult)
    {
      $this->DebtorContact_GetNameResult = $DebtorContact_GetNameResult;
    }

    /**
     * @return string
     */
    public function getDebtorContact_GetNameResult()
    {
      return $this->DebtorContact_GetNameResult;
    }

    /**
     * @param string $DebtorContact_GetNameResult
     * @return \Economic\DebtorContact_GetNameResponse
     */
    public function setDebtorContact_GetNameResult($DebtorContact_GetNameResult)
    {
      $this->DebtorContact_GetNameResult = $DebtorContact_GetNameResult;
      return $this;
    }

}
