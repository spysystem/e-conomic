<?php

namespace Economic;

class DebtorContact_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfDebtorContactHandle $DebtorContact_UpdateFromDataArrayResult
     */
    protected $DebtorContact_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_UpdateFromDataArrayResult
     */
    public function __construct($DebtorContact_UpdateFromDataArrayResult)
    {
      $this->DebtorContact_UpdateFromDataArrayResult = $DebtorContact_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorContactHandle
     */
    public function getDebtorContact_UpdateFromDataArrayResult()
    {
      return $this->DebtorContact_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_UpdateFromDataArrayResult
     * @return \Economic\DebtorContact_UpdateFromDataArrayResponse
     */
    public function setDebtorContact_UpdateFromDataArrayResult($DebtorContact_UpdateFromDataArrayResult)
    {
      $this->DebtorContact_UpdateFromDataArrayResult = $DebtorContact_UpdateFromDataArrayResult;
      return $this;
    }

}
