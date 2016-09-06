<?php

namespace Economic;

class CreditorGroup_CreateFromDataResponse
{

    /**
     * @var CreditorGroupHandle $CreditorGroup_CreateFromDataResult
     */
    protected $CreditorGroup_CreateFromDataResult = null;

    /**
     * @param CreditorGroupHandle $CreditorGroup_CreateFromDataResult
     */
    public function __construct($CreditorGroup_CreateFromDataResult)
    {
      $this->CreditorGroup_CreateFromDataResult = $CreditorGroup_CreateFromDataResult;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getCreditorGroup_CreateFromDataResult()
    {
      return $this->CreditorGroup_CreateFromDataResult;
    }

    /**
     * @param CreditorGroupHandle $CreditorGroup_CreateFromDataResult
     * @return \Economic\CreditorGroup_CreateFromDataResponse
     */
    public function setCreditorGroup_CreateFromDataResult($CreditorGroup_CreateFromDataResult)
    {
      $this->CreditorGroup_CreateFromDataResult = $CreditorGroup_CreateFromDataResult;
      return $this;
    }

}
