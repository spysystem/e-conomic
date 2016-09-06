<?php

namespace Economic;

class Debtor_GetDataArrayResponse
{

    /**
     * @var ArrayOfDebtorData $Debtor_GetDataArrayResult
     */
    protected $Debtor_GetDataArrayResult = null;

    /**
     * @param ArrayOfDebtorData $Debtor_GetDataArrayResult
     */
    public function __construct($Debtor_GetDataArrayResult)
    {
      $this->Debtor_GetDataArrayResult = $Debtor_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorData
     */
    public function getDebtor_GetDataArrayResult()
    {
      return $this->Debtor_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorData $Debtor_GetDataArrayResult
     * @return \Economic\Debtor_GetDataArrayResponse
     */
    public function setDebtor_GetDataArrayResult($Debtor_GetDataArrayResult)
    {
      $this->Debtor_GetDataArrayResult = $Debtor_GetDataArrayResult;
      return $this;
    }

}
