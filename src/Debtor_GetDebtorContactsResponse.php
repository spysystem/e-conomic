<?php

namespace Economic;

class Debtor_GetDebtorContactsResponse
{

    /**
     * @var ArrayOfDebtorContactHandle $Debtor_GetDebtorContactsResult
     */
    protected $Debtor_GetDebtorContactsResult = null;

    /**
     * @param ArrayOfDebtorContactHandle $Debtor_GetDebtorContactsResult
     */
    public function __construct($Debtor_GetDebtorContactsResult)
    {
      $this->Debtor_GetDebtorContactsResult = $Debtor_GetDebtorContactsResult;
    }

    /**
     * @return ArrayOfDebtorContactHandle
     */
    public function getDebtor_GetDebtorContactsResult()
    {
      return $this->Debtor_GetDebtorContactsResult;
    }

    /**
     * @param ArrayOfDebtorContactHandle $Debtor_GetDebtorContactsResult
     * @return \Economic\Debtor_GetDebtorContactsResponse
     */
    public function setDebtor_GetDebtorContactsResult($Debtor_GetDebtorContactsResult)
    {
      $this->Debtor_GetDebtorContactsResult = $Debtor_GetDebtorContactsResult;
      return $this;
    }

}
