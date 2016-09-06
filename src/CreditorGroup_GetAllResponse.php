<?php

namespace Economic;

class CreditorGroup_GetAllResponse
{

    /**
     * @var ArrayOfCreditorGroupHandle $CreditorGroup_GetAllResult
     */
    protected $CreditorGroup_GetAllResult = null;

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_GetAllResult
     */
    public function __construct($CreditorGroup_GetAllResult)
    {
      $this->CreditorGroup_GetAllResult = $CreditorGroup_GetAllResult;
    }

    /**
     * @return ArrayOfCreditorGroupHandle
     */
    public function getCreditorGroup_GetAllResult()
    {
      return $this->CreditorGroup_GetAllResult;
    }

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_GetAllResult
     * @return \Economic\CreditorGroup_GetAllResponse
     */
    public function setCreditorGroup_GetAllResult($CreditorGroup_GetAllResult)
    {
      $this->CreditorGroup_GetAllResult = $CreditorGroup_GetAllResult;
      return $this;
    }

}
