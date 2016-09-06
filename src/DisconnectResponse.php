<?php

namespace Economic;

class DisconnectResponse
{

    /**
     * @var string $DisconnectResult
     */
    protected $DisconnectResult = null;

    /**
     * @param string $DisconnectResult
     */
    public function __construct($DisconnectResult)
    {
      $this->DisconnectResult = $DisconnectResult;
    }

    /**
     * @return string
     */
    public function getDisconnectResult()
    {
      return $this->DisconnectResult;
    }

    /**
     * @param string $DisconnectResult
     * @return \Economic\DisconnectResponse
     */
    public function setDisconnectResult($DisconnectResult)
    {
      $this->DisconnectResult = $DisconnectResult;
      return $this;
    }

}
