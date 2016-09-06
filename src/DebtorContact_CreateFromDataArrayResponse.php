<?php

namespace Economic;

class DebtorContact_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfDebtorContactHandle $DebtorContact_CreateFromDataArrayResult
     */
    protected $DebtorContact_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_CreateFromDataArrayResult
     */
    public function __construct($DebtorContact_CreateFromDataArrayResult)
    {
      $this->DebtorContact_CreateFromDataArrayResult = $DebtorContact_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorContactHandle
     */
    public function getDebtorContact_CreateFromDataArrayResult()
    {
      return $this->DebtorContact_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_CreateFromDataArrayResult
     * @return \Economic\DebtorContact_CreateFromDataArrayResponse
     */
    public function setDebtorContact_CreateFromDataArrayResult($DebtorContact_CreateFromDataArrayResult)
    {
      $this->DebtorContact_CreateFromDataArrayResult = $DebtorContact_CreateFromDataArrayResult;
      return $this;
    }

}
