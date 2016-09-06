<?php

namespace Economic;

class CreditorGroup_UpdateFromDataResponse
{

    /**
     * @var CreditorGroupHandle $CreditorGroup_UpdateFromDataResult
     */
    protected $CreditorGroup_UpdateFromDataResult = null;

    /**
     * @param CreditorGroupHandle $CreditorGroup_UpdateFromDataResult
     */
    public function __construct($CreditorGroup_UpdateFromDataResult)
    {
      $this->CreditorGroup_UpdateFromDataResult = $CreditorGroup_UpdateFromDataResult;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getCreditorGroup_UpdateFromDataResult()
    {
      return $this->CreditorGroup_UpdateFromDataResult;
    }

    /**
     * @param CreditorGroupHandle $CreditorGroup_UpdateFromDataResult
     * @return \Economic\CreditorGroup_UpdateFromDataResponse
     */
    public function setCreditorGroup_UpdateFromDataResult($CreditorGroup_UpdateFromDataResult)
    {
      $this->CreditorGroup_UpdateFromDataResult = $CreditorGroup_UpdateFromDataResult;
      return $this;
    }

}
