<?php

namespace Economic;

class CreditorContact_GetDataArrayResponse
{

    /**
     * @var ArrayOfCreditorContactData $CreditorContact_GetDataArrayResult
     */
    protected $CreditorContact_GetDataArrayResult = null;

    /**
     * @param ArrayOfCreditorContactData $CreditorContact_GetDataArrayResult
     */
    public function __construct($CreditorContact_GetDataArrayResult)
    {
      $this->CreditorContact_GetDataArrayResult = $CreditorContact_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCreditorContactData
     */
    public function getCreditorContact_GetDataArrayResult()
    {
      return $this->CreditorContact_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCreditorContactData $CreditorContact_GetDataArrayResult
     * @return \Economic\CreditorContact_GetDataArrayResponse
     */
    public function setCreditorContact_GetDataArrayResult($CreditorContact_GetDataArrayResult)
    {
      $this->CreditorContact_GetDataArrayResult = $CreditorContact_GetDataArrayResult;
      return $this;
    }

}
