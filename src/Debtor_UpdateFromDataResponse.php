<?php

namespace Economic;

class Debtor_UpdateFromDataResponse
{

    /**
     * @var DebtorHandle $Debtor_UpdateFromDataResult
     */
    protected $Debtor_UpdateFromDataResult = null;

    /**
     * @param DebtorHandle $Debtor_UpdateFromDataResult
     */
    public function __construct($Debtor_UpdateFromDataResult)
    {
      $this->Debtor_UpdateFromDataResult = $Debtor_UpdateFromDataResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtor_UpdateFromDataResult()
    {
      return $this->Debtor_UpdateFromDataResult;
    }

    /**
     * @param DebtorHandle $Debtor_UpdateFromDataResult
     * @return \Economic\Debtor_UpdateFromDataResponse
     */
    public function setDebtor_UpdateFromDataResult($Debtor_UpdateFromDataResult)
    {
      $this->Debtor_UpdateFromDataResult = $Debtor_UpdateFromDataResult;
      return $this;
    }

}
