<?php

namespace Economic;

class DebtorContact_CreateResponse
{

    /**
     * @var DebtorContactHandle $DebtorContact_CreateResult
     */
    protected $DebtorContact_CreateResult = null;

    /**
     * @param DebtorContactHandle $DebtorContact_CreateResult
     */
    public function __construct($DebtorContact_CreateResult)
    {
      $this->DebtorContact_CreateResult = $DebtorContact_CreateResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getDebtorContact_CreateResult()
    {
      return $this->DebtorContact_CreateResult;
    }

    /**
     * @param DebtorContactHandle $DebtorContact_CreateResult
     * @return \Economic\DebtorContact_CreateResponse
     */
    public function setDebtorContact_CreateResult($DebtorContact_CreateResult)
    {
      $this->DebtorContact_CreateResult = $DebtorContact_CreateResult;
      return $this;
    }

}
