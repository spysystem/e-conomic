<?php

namespace Economic;

class DebtorContact_FindByExternalIdResponse
{

    /**
     * @var ArrayOfDebtorContactHandle $DebtorContact_FindByExternalIdResult
     */
    protected $DebtorContact_FindByExternalIdResult = null;

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_FindByExternalIdResult
     */
    public function __construct($DebtorContact_FindByExternalIdResult)
    {
      $this->DebtorContact_FindByExternalIdResult = $DebtorContact_FindByExternalIdResult;
    }

    /**
     * @return ArrayOfDebtorContactHandle
     */
    public function getDebtorContact_FindByExternalIdResult()
    {
      return $this->DebtorContact_FindByExternalIdResult;
    }

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_FindByExternalIdResult
     * @return \Economic\DebtorContact_FindByExternalIdResponse
     */
    public function setDebtorContact_FindByExternalIdResult($DebtorContact_FindByExternalIdResult)
    {
      $this->DebtorContact_FindByExternalIdResult = $DebtorContact_FindByExternalIdResult;
      return $this;
    }

}
