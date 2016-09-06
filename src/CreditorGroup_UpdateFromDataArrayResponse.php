<?php

namespace Economic;

class CreditorGroup_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCreditorGroupHandle $CreditorGroup_UpdateFromDataArrayResult
     */
    protected $CreditorGroup_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_UpdateFromDataArrayResult
     */
    public function __construct($CreditorGroup_UpdateFromDataArrayResult)
    {
      $this->CreditorGroup_UpdateFromDataArrayResult = $CreditorGroup_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorGroupHandle
     */
    public function getCreditorGroup_UpdateFromDataArrayResult()
    {
      return $this->CreditorGroup_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorGroupHandle $CreditorGroup_UpdateFromDataArrayResult
     * @return \Economic\CreditorGroup_UpdateFromDataArrayResponse
     */
    public function setCreditorGroup_UpdateFromDataArrayResult($CreditorGroup_UpdateFromDataArrayResult)
    {
      $this->CreditorGroup_UpdateFromDataArrayResult = $CreditorGroup_UpdateFromDataArrayResult;
      return $this;
    }

}
