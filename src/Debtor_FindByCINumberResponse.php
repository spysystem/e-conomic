<?php

namespace Economic;

class Debtor_FindByCINumberResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_FindByCINumberResult
     */
    protected $Debtor_FindByCINumberResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByCINumberResult
     */
    public function __construct($Debtor_FindByCINumberResult)
    {
      $this->Debtor_FindByCINumberResult = $Debtor_FindByCINumberResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_FindByCINumberResult()
    {
      return $this->Debtor_FindByCINumberResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByCINumberResult
     * @return \Economic\Debtor_FindByCINumberResponse
     */
    public function setDebtor_FindByCINumberResult($Debtor_FindByCINumberResult)
    {
      $this->Debtor_FindByCINumberResult = $Debtor_FindByCINumberResult;
      return $this;
    }

}
