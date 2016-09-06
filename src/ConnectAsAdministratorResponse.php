<?php

namespace Economic;

class ConnectAsAdministratorResponse
{

    /**
     * @var string $ConnectAsAdministratorResult
     */
    protected $ConnectAsAdministratorResult = null;

    /**
     * @param string $ConnectAsAdministratorResult
     */
    public function __construct($ConnectAsAdministratorResult)
    {
      $this->ConnectAsAdministratorResult = $ConnectAsAdministratorResult;
    }

    /**
     * @return string
     */
    public function getConnectAsAdministratorResult()
    {
      return $this->ConnectAsAdministratorResult;
    }

    /**
     * @param string $ConnectAsAdministratorResult
     * @return \Economic\ConnectAsAdministratorResponse
     */
    public function setConnectAsAdministratorResult($ConnectAsAdministratorResult)
    {
      $this->ConnectAsAdministratorResult = $ConnectAsAdministratorResult;
      return $this;
    }

}
