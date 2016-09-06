<?php

namespace Economic;

class Debtor_GetDataResponse
{

    /**
     * @var DebtorData $Debtor_GetDataResult
     */
    protected $Debtor_GetDataResult = null;

    /**
     * @param DebtorData $Debtor_GetDataResult
     */
    public function __construct($Debtor_GetDataResult)
    {
      $this->Debtor_GetDataResult = $Debtor_GetDataResult;
    }

    /**
     * @return DebtorData
     */
    public function getDebtor_GetDataResult()
    {
      return $this->Debtor_GetDataResult;
    }

    /**
     * @param DebtorData $Debtor_GetDataResult
     * @return \Economic\Debtor_GetDataResponse
     */
    public function setDebtor_GetDataResult($Debtor_GetDataResult)
    {
      $this->Debtor_GetDataResult = $Debtor_GetDataResult;
      return $this;
    }

}
