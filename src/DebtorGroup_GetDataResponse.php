<?php

namespace Economic;

class DebtorGroup_GetDataResponse
{

    /**
     * @var DebtorGroupData $DebtorGroup_GetDataResult
     */
    protected $DebtorGroup_GetDataResult = null;

    /**
     * @param DebtorGroupData $DebtorGroup_GetDataResult
     */
    public function __construct($DebtorGroup_GetDataResult)
    {
      $this->DebtorGroup_GetDataResult = $DebtorGroup_GetDataResult;
    }

    /**
     * @return DebtorGroupData
     */
    public function getDebtorGroup_GetDataResult()
    {
      return $this->DebtorGroup_GetDataResult;
    }

    /**
     * @param DebtorGroupData $DebtorGroup_GetDataResult
     * @return \Economic\DebtorGroup_GetDataResponse
     */
    public function setDebtorGroup_GetDataResult($DebtorGroup_GetDataResult)
    {
      $this->DebtorGroup_GetDataResult = $DebtorGroup_GetDataResult;
      return $this;
    }

}
