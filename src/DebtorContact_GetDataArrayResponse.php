<?php

namespace Economic;

class DebtorContact_GetDataArrayResponse
{

    /**
     * @var ArrayOfDebtorContactData $DebtorContact_GetDataArrayResult
     */
    protected $DebtorContact_GetDataArrayResult = null;

    /**
     * @param ArrayOfDebtorContactData $DebtorContact_GetDataArrayResult
     */
    public function __construct($DebtorContact_GetDataArrayResult)
    {
      $this->DebtorContact_GetDataArrayResult = $DebtorContact_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorContactData
     */
    public function getDebtorContact_GetDataArrayResult()
    {
      return $this->DebtorContact_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorContactData $DebtorContact_GetDataArrayResult
     * @return \Economic\DebtorContact_GetDataArrayResponse
     */
    public function setDebtorContact_GetDataArrayResult($DebtorContact_GetDataArrayResult)
    {
      $this->DebtorContact_GetDataArrayResult = $DebtorContact_GetDataArrayResult;
      return $this;
    }

}
