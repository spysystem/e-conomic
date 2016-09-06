<?php

namespace Economic;

class Debtor_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_UpdateFromDataArrayResult
     */
    protected $Debtor_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_UpdateFromDataArrayResult
     */
    public function __construct($Debtor_UpdateFromDataArrayResult)
    {
      $this->Debtor_UpdateFromDataArrayResult = $Debtor_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_UpdateFromDataArrayResult()
    {
      return $this->Debtor_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_UpdateFromDataArrayResult
     * @return \Economic\Debtor_UpdateFromDataArrayResponse
     */
    public function setDebtor_UpdateFromDataArrayResult($Debtor_UpdateFromDataArrayResult)
    {
      $this->Debtor_UpdateFromDataArrayResult = $Debtor_UpdateFromDataArrayResult;
      return $this;
    }

}
