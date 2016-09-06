<?php

namespace Economic;

class CreditorGroup_FindByNumberListResponse
{

    /**
     * @var ArrayOfCreditorGroupHandle $CreditorGroup_FindByNumberListResult
     */
    protected $CreditorGroup_FindByNumberListResult = null;

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_FindByNumberListResult
     */
    public function __construct($CreditorGroup_FindByNumberListResult)
    {
      $this->CreditorGroup_FindByNumberListResult = $CreditorGroup_FindByNumberListResult;
    }

    /**
     * @return ArrayOfCreditorGroupHandle
     */
    public function getCreditorGroup_FindByNumberListResult()
    {
      return $this->CreditorGroup_FindByNumberListResult;
    }

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_FindByNumberListResult
     * @return \Economic\CreditorGroup_FindByNumberListResponse
     */
    public function setCreditorGroup_FindByNumberListResult($CreditorGroup_FindByNumberListResult)
    {
      $this->CreditorGroup_FindByNumberListResult = $CreditorGroup_FindByNumberListResult;
      return $this;
    }

}
