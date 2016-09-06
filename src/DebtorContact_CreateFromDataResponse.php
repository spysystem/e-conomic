<?php

namespace Economic;

class DebtorContact_CreateFromDataResponse
{

    /**
     * @var DebtorContactHandle $DebtorContact_CreateFromDataResult
     */
    protected $DebtorContact_CreateFromDataResult = null;

    /**
     * @param DebtorContactHandle $DebtorContact_CreateFromDataResult
     */
    public function __construct($DebtorContact_CreateFromDataResult)
    {
      $this->DebtorContact_CreateFromDataResult = $DebtorContact_CreateFromDataResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getDebtorContact_CreateFromDataResult()
    {
      return $this->DebtorContact_CreateFromDataResult;
    }

    /**
     * @param DebtorContactHandle $DebtorContact_CreateFromDataResult
     * @return \Economic\DebtorContact_CreateFromDataResponse
     */
    public function setDebtorContact_CreateFromDataResult($DebtorContact_CreateFromDataResult)
    {
      $this->DebtorContact_CreateFromDataResult = $DebtorContact_CreateFromDataResult;
      return $this;
    }

}
