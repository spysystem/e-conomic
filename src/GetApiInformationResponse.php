<?php

namespace Economic;

class GetApiInformationResponse
{

    /**
     * @var string $GetApiInformationResult
     */
    protected $GetApiInformationResult = null;

    /**
     * @param string $GetApiInformationResult
     */
    public function __construct($GetApiInformationResult)
    {
      $this->GetApiInformationResult = $GetApiInformationResult;
    }

    /**
     * @return string
     */
    public function getGetApiInformationResult()
    {
      return $this->GetApiInformationResult;
    }

    /**
     * @param string $GetApiInformationResult
     * @return \Economic\GetApiInformationResponse
     */
    public function setGetApiInformationResult($GetApiInformationResult)
    {
      $this->GetApiInformationResult = $GetApiInformationResult;
      return $this;
    }

}
