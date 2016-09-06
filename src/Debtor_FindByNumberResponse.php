<?php

namespace Economic;

class Debtor_FindByNumberResponse
{

    /**
     * @var DebtorHandle $Debtor_FindByNumberResult
     */
    protected $Debtor_FindByNumberResult = null;

    /**
     * @param DebtorHandle $Debtor_FindByNumberResult
     */
    public function __construct($Debtor_FindByNumberResult)
    {
      $this->Debtor_FindByNumberResult = $Debtor_FindByNumberResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtor_FindByNumberResult()
    {
      return $this->Debtor_FindByNumberResult;
    }

    /**
     * @param DebtorHandle $Debtor_FindByNumberResult
     * @return \Economic\Debtor_FindByNumberResponse
     */
    public function setDebtor_FindByNumberResult($Debtor_FindByNumberResult)
    {
      $this->Debtor_FindByNumberResult = $Debtor_FindByNumberResult;
      return $this;
    }

}
