<?php

namespace Economic;

class DebtorGroup_FindByNumberResponse
{

    /**
     * @var DebtorGroupHandle $DebtorGroup_FindByNumberResult
     */
    protected $DebtorGroup_FindByNumberResult = null;

    /**
     * @param DebtorGroupHandle $DebtorGroup_FindByNumberResult
     */
    public function __construct($DebtorGroup_FindByNumberResult)
    {
      $this->DebtorGroup_FindByNumberResult = $DebtorGroup_FindByNumberResult;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroup_FindByNumberResult()
    {
      return $this->DebtorGroup_FindByNumberResult;
    }

    /**
     * @param DebtorGroupHandle $DebtorGroup_FindByNumberResult
     * @return \Economic\DebtorGroup_FindByNumberResponse
     */
    public function setDebtorGroup_FindByNumberResult($DebtorGroup_FindByNumberResult)
    {
      $this->DebtorGroup_FindByNumberResult = $DebtorGroup_FindByNumberResult;
      return $this;
    }

}
