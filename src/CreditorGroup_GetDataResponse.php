<?php

namespace Economic;

class CreditorGroup_GetDataResponse
{

    /**
     * @var CreditorGroupData $CreditorGroup_GetDataResult
     */
    protected $CreditorGroup_GetDataResult = null;

    /**
     * @param CreditorGroupData $CreditorGroup_GetDataResult
     */
    public function __construct($CreditorGroup_GetDataResult)
    {
      $this->CreditorGroup_GetDataResult = $CreditorGroup_GetDataResult;
    }

    /**
     * @return CreditorGroupData
     */
    public function getCreditorGroup_GetDataResult()
    {
      return $this->CreditorGroup_GetDataResult;
    }

    /**
     * @param CreditorGroupData $CreditorGroup_GetDataResult
     * @return \Economic\CreditorGroup_GetDataResponse
     */
    public function setCreditorGroup_GetDataResult($CreditorGroup_GetDataResult)
    {
      $this->CreditorGroup_GetDataResult = $CreditorGroup_GetDataResult;
      return $this;
    }

}
