<?php

namespace Economic;

class Debtor_CreateResponse
{

    /**
     * @var DebtorHandle $Debtor_CreateResult
     */
    protected $Debtor_CreateResult = null;

    /**
     * @param DebtorHandle $Debtor_CreateResult
     */
    public function __construct($Debtor_CreateResult)
    {
      $this->Debtor_CreateResult = $Debtor_CreateResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtor_CreateResult()
    {
      return $this->Debtor_CreateResult;
    }

    /**
     * @param DebtorHandle $Debtor_CreateResult
     * @return \Economic\Debtor_CreateResponse
     */
    public function setDebtor_CreateResult($Debtor_CreateResult)
    {
      $this->Debtor_CreateResult = $Debtor_CreateResult;
      return $this;
    }

}
