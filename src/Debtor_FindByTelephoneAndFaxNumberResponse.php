<?php

namespace Economic;

class Debtor_FindByTelephoneAndFaxNumberResponse
{

    /**
     * @var ArrayOfDebtorHandle $Debtor_FindByTelephoneAndFaxNumberResult
     */
    protected $Debtor_FindByTelephoneAndFaxNumberResult = null;

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByTelephoneAndFaxNumberResult
     */
    public function __construct($Debtor_FindByTelephoneAndFaxNumberResult)
    {
      $this->Debtor_FindByTelephoneAndFaxNumberResult = $Debtor_FindByTelephoneAndFaxNumberResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtor_FindByTelephoneAndFaxNumberResult()
    {
      return $this->Debtor_FindByTelephoneAndFaxNumberResult;
    }

    /**
     * @param ArrayOfDebtorHandle $Debtor_FindByTelephoneAndFaxNumberResult
     * @return \Economic\Debtor_FindByTelephoneAndFaxNumberResponse
     */
    public function setDebtor_FindByTelephoneAndFaxNumberResult($Debtor_FindByTelephoneAndFaxNumberResult)
    {
      $this->Debtor_FindByTelephoneAndFaxNumberResult = $Debtor_FindByTelephoneAndFaxNumberResult;
      return $this;
    }

}
