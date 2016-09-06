<?php

namespace Economic;

class ConnectResponse
{

    /**
     * @var string $ConnectResult
     */
    protected $ConnectResult = null;

    /**
     * @param string $ConnectResult
     */
    public function __construct($ConnectResult)
    {
      $this->ConnectResult = $ConnectResult;
    }

    /**
     * @return string
     */
    public function getConnectResult()
    {
      return $this->ConnectResult;
    }

    /**
     * @param string $ConnectResult
     * @return \Economic\ConnectResponse
     */
    public function setConnectResult($ConnectResult)
    {
      $this->ConnectResult = $ConnectResult;
      return $this;
    }

}
