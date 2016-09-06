<?php

namespace Economic;

class DebtorGroup_CreateResponse
{

    /**
     * @var DebtorGroupHandle $DebtorGroup_CreateResult
     */
    protected $DebtorGroup_CreateResult = null;

    /**
     * @param DebtorGroupHandle $DebtorGroup_CreateResult
     */
    public function __construct($DebtorGroup_CreateResult)
    {
      $this->DebtorGroup_CreateResult = $DebtorGroup_CreateResult;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroup_CreateResult()
    {
      return $this->DebtorGroup_CreateResult;
    }

    /**
     * @param DebtorGroupHandle $DebtorGroup_CreateResult
     * @return \Economic\DebtorGroup_CreateResponse
     */
    public function setDebtorGroup_CreateResult($DebtorGroup_CreateResult)
    {
      $this->DebtorGroup_CreateResult = $DebtorGroup_CreateResult;
      return $this;
    }

}
