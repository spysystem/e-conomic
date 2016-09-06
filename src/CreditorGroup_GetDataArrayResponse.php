<?php

namespace Economic;

class CreditorGroup_GetDataArrayResponse
{

    /**
     * @var ArrayOfCreditorGroupData $CreditorGroup_GetDataArrayResult
     */
    protected $CreditorGroup_GetDataArrayResult = null;

    /**
     * @param ArrayOfCreditorGroupData $CreditorGroup_GetDataArrayResult
     */
    public function __construct($CreditorGroup_GetDataArrayResult)
    {
      $this->CreditorGroup_GetDataArrayResult = $CreditorGroup_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorGroupData
     */
    public function getCreditorGroup_GetDataArrayResult()
    {
      return $this->CreditorGroup_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorGroupData $CreditorGroup_GetDataArrayResult
     * @return \Economic\CreditorGroup_GetDataArrayResponse
     */
    public function setCreditorGroup_GetDataArrayResult($CreditorGroup_GetDataArrayResult)
    {
      $this->CreditorGroup_GetDataArrayResult = $CreditorGroup_GetDataArrayResult;
      return $this;
    }

}
