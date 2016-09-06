<?php

namespace Economic;

class Creditor_GetDataArrayResponse
{

    /**
     * @var ArrayOfCreditorData $Creditor_GetDataArrayResult
     */
    protected $Creditor_GetDataArrayResult = null;

    /**
     * @param ArrayOfCreditorData $Creditor_GetDataArrayResult
     */
    public function __construct($Creditor_GetDataArrayResult)
    {
      $this->Creditor_GetDataArrayResult = $Creditor_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorData
     */
    public function getCreditor_GetDataArrayResult()
    {
      return $this->Creditor_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorData $Creditor_GetDataArrayResult
     * @return \Economic\Creditor_GetDataArrayResponse
     */
    public function setCreditor_GetDataArrayResult($Creditor_GetDataArrayResult)
    {
      $this->Creditor_GetDataArrayResult = $Creditor_GetDataArrayResult;
      return $this;
    }

}
