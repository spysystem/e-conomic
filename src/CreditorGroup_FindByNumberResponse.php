<?php

namespace Economic;

class CreditorGroup_FindByNumberResponse
{

    /**
     * @var CreditorGroupHandle $CreditorGroup_FindByNumberResult
     */
    protected $CreditorGroup_FindByNumberResult = null;

    /**
     * @param CreditorGroupHandle $CreditorGroup_FindByNumberResult
     */
    public function __construct($CreditorGroup_FindByNumberResult)
    {
      $this->CreditorGroup_FindByNumberResult = $CreditorGroup_FindByNumberResult;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getCreditorGroup_FindByNumberResult()
    {
      return $this->CreditorGroup_FindByNumberResult;
    }

    /**
     * @param CreditorGroupHandle $CreditorGroup_FindByNumberResult
     * @return \Economic\CreditorGroup_FindByNumberResponse
     */
    public function setCreditorGroup_FindByNumberResult($CreditorGroup_FindByNumberResult)
    {
      $this->CreditorGroup_FindByNumberResult = $CreditorGroup_FindByNumberResult;
      return $this;
    }

}
