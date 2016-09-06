<?php

namespace Economic;

class Debtor_CreateFromDataResponse
{

    /**
     * @var DebtorHandle $Debtor_CreateFromDataResult
     */
    protected $Debtor_CreateFromDataResult = null;

    /**
     * @param DebtorHandle $Debtor_CreateFromDataResult
     */
    public function __construct($Debtor_CreateFromDataResult)
    {
      $this->Debtor_CreateFromDataResult = $Debtor_CreateFromDataResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtor_CreateFromDataResult()
    {
      return $this->Debtor_CreateFromDataResult;
    }

    /**
     * @param DebtorHandle $Debtor_CreateFromDataResult
     * @return \Economic\Debtor_CreateFromDataResponse
     */
    public function setDebtor_CreateFromDataResult($Debtor_CreateFromDataResult)
    {
      $this->Debtor_CreateFromDataResult = $Debtor_CreateFromDataResult;
      return $this;
    }

}
