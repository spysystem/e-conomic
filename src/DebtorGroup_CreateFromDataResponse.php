<?php

namespace Economic;

class DebtorGroup_CreateFromDataResponse
{

    /**
     * @var DebtorGroupHandle $DebtorGroup_CreateFromDataResult
     */
    protected $DebtorGroup_CreateFromDataResult = null;

    /**
     * @param DebtorGroupHandle $DebtorGroup_CreateFromDataResult
     */
    public function __construct($DebtorGroup_CreateFromDataResult)
    {
      $this->DebtorGroup_CreateFromDataResult = $DebtorGroup_CreateFromDataResult;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroup_CreateFromDataResult()
    {
      return $this->DebtorGroup_CreateFromDataResult;
    }

    /**
     * @param DebtorGroupHandle $DebtorGroup_CreateFromDataResult
     * @return \Economic\DebtorGroup_CreateFromDataResponse
     */
    public function setDebtorGroup_CreateFromDataResult($DebtorGroup_CreateFromDataResult)
    {
      $this->DebtorGroup_CreateFromDataResult = $DebtorGroup_CreateFromDataResult;
      return $this;
    }

}
