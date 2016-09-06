<?php

namespace Economic;

class DebtorContact_GetDataResponse
{

    /**
     * @var DebtorContactData $DebtorContact_GetDataResult
     */
    protected $DebtorContact_GetDataResult = null;

    /**
     * @param DebtorContactData $DebtorContact_GetDataResult
     */
    public function __construct($DebtorContact_GetDataResult)
    {
      $this->DebtorContact_GetDataResult = $DebtorContact_GetDataResult;
    }

    /**
     * @return DebtorContactData
     */
    public function getDebtorContact_GetDataResult()
    {
      return $this->DebtorContact_GetDataResult;
    }

    /**
     * @param DebtorContactData $DebtorContact_GetDataResult
     * @return \Economic\DebtorContact_GetDataResponse
     */
    public function setDebtorContact_GetDataResult($DebtorContact_GetDataResult)
    {
      $this->DebtorContact_GetDataResult = $DebtorContact_GetDataResult;
      return $this;
    }

}
