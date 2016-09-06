<?php

namespace Economic;

class ConnectWithTokenResponse
{

    /**
     * @var string $ConnectWithTokenResult
     */
    protected $ConnectWithTokenResult = null;

    /**
     * @param string $ConnectWithTokenResult
     */
    public function __construct($ConnectWithTokenResult)
    {
      $this->ConnectWithTokenResult = $ConnectWithTokenResult;
    }

    /**
     * @return string
     */
    public function getConnectWithTokenResult()
    {
      return $this->ConnectWithTokenResult;
    }

    /**
     * @param string $ConnectWithTokenResult
     * @return \Economic\ConnectWithTokenResponse
     */
    public function setConnectWithTokenResult($ConnectWithTokenResult)
    {
      $this->ConnectWithTokenResult = $ConnectWithTokenResult;
      return $this;
    }

}
