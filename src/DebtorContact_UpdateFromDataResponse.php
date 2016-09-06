<?php

namespace Economic;

class DebtorContact_UpdateFromDataResponse
{

    /**
     * @var DebtorContactHandle $DebtorContact_UpdateFromDataResult
     */
    protected $DebtorContact_UpdateFromDataResult = null;

    /**
     * @param DebtorContactHandle $DebtorContact_UpdateFromDataResult
     */
    public function __construct($DebtorContact_UpdateFromDataResult)
    {
      $this->DebtorContact_UpdateFromDataResult = $DebtorContact_UpdateFromDataResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getDebtorContact_UpdateFromDataResult()
    {
      return $this->DebtorContact_UpdateFromDataResult;
    }

    /**
     * @param DebtorContactHandle $DebtorContact_UpdateFromDataResult
     * @return \Economic\DebtorContact_UpdateFromDataResponse
     */
    public function setDebtorContact_UpdateFromDataResult($DebtorContact_UpdateFromDataResult)
    {
      $this->DebtorContact_UpdateFromDataResult = $DebtorContact_UpdateFromDataResult;
      return $this;
    }

}
