<?php

namespace Economic;

class Debtor_FindByEmailResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_FindByEmailResult
     */
    protected $Debtor_FindByEmailResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByEmailResult
     */
    public function __construct($Debtor_FindByEmailResult)
    {
      $this->Debtor_FindByEmailResult = $Debtor_FindByEmailResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_FindByEmailResult()
    {
      return $this->Debtor_FindByEmailResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByEmailResult
     * @return \Economic\Debtor_FindByEmailResponse
     */
    public function setDebtor_FindByEmailResult($Debtor_FindByEmailResult)
    {
      $this->Debtor_FindByEmailResult = $Debtor_FindByEmailResult;
      return $this;
    }

}
