<?php

namespace Economic;

class CreditorContact_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfCreditorContactHandle $CreditorContact_UpdateFromDataArrayResult
     */
    protected $CreditorContact_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_UpdateFromDataArrayResult
     */
    public function __construct($CreditorContact_UpdateFromDataArrayResult)
    {
      $this->CreditorContact_UpdateFromDataArrayResult = $CreditorContact_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorContactHandle
     */
    public function getCreditorContact_UpdateFromDataArrayResult()
    {
      return $this->CreditorContact_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorContactHandle $CreditorContact_UpdateFromDataArrayResult
     * @return \Economic\CreditorContact_UpdateFromDataArrayResponse
     */
    public function setCreditorContact_UpdateFromDataArrayResult($CreditorContact_UpdateFromDataArrayResult)
    {
      $this->CreditorContact_UpdateFromDataArrayResult = $CreditorContact_UpdateFromDataArrayResult;
      return $this;
    }

}
