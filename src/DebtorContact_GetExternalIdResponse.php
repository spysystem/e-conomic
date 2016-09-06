<?php

namespace Economic;

class DebtorContact_GetExternalIdResponse
{

    /**
     * @var string $DebtorContact_GetExternalIdResult
     */
    protected $DebtorContact_GetExternalIdResult = null;

    /**
     * @param string $DebtorContact_GetExternalIdResult
     */
    public function __construct($DebtorContact_GetExternalIdResult)
    {
      $this->DebtorContact_GetExternalIdResult = $DebtorContact_GetExternalIdResult;
    }

    /**
     * @return string
     */
    public function getDebtorContact_GetExternalIdResult()
    {
      return $this->DebtorContact_GetExternalIdResult;
    }

    /**
     * @param string $DebtorContact_GetExternalIdResult
     * @return \Economic\DebtorContact_GetExternalIdResponse
     */
    public function setDebtorContact_GetExternalIdResult($DebtorContact_GetExternalIdResult)
    {
      $this->DebtorContact_GetExternalIdResult = $DebtorContact_GetExternalIdResult;
      return $this;
    }

}
