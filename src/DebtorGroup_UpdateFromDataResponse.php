<?php

namespace Economic;

class DebtorGroup_UpdateFromDataResponse
{

    /**
     * @var DebtorGroupHandle $DebtorGroup_UpdateFromDataResult
     */
    protected $DebtorGroup_UpdateFromDataResult = null;

    /**
     * @param DebtorGroupHandle $DebtorGroup_UpdateFromDataResult
     */
    public function __construct($DebtorGroup_UpdateFromDataResult)
    {
      $this->DebtorGroup_UpdateFromDataResult = $DebtorGroup_UpdateFromDataResult;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroup_UpdateFromDataResult()
    {
      return $this->DebtorGroup_UpdateFromDataResult;
    }

    /**
     * @param DebtorGroupHandle $DebtorGroup_UpdateFromDataResult
     * @return \Economic\DebtorGroup_UpdateFromDataResponse
     */
    public function setDebtorGroup_UpdateFromDataResult($DebtorGroup_UpdateFromDataResult)
    {
      $this->DebtorGroup_UpdateFromDataResult = $DebtorGroup_UpdateFromDataResult;
      return $this;
    }

}
