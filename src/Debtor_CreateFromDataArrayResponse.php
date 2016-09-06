<?php

namespace Economic;

class Debtor_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_CreateFromDataArrayResult
     */
    protected $Debtor_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_CreateFromDataArrayResult
     */
    public function __construct($Debtor_CreateFromDataArrayResult)
    {
      $this->Debtor_CreateFromDataArrayResult = $Debtor_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_CreateFromDataArrayResult()
    {
      return $this->Debtor_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_CreateFromDataArrayResult
     * @return \Economic\Debtor_CreateFromDataArrayResponse
     */
    public function setDebtor_CreateFromDataArrayResult($Debtor_CreateFromDataArrayResult)
    {
      $this->Debtor_CreateFromDataArrayResult = $Debtor_CreateFromDataArrayResult;
      return $this;
    }

}
