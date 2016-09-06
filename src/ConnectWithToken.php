<?php

namespace Economic;

class ConnectWithToken
{

    /**
     * @var string $token
     */
    protected $token = null;

    /**
     * @var string $appToken
     */
    protected $appToken = null;

    /**
     * @param string $token
     * @param string $appToken
     */
    public function __construct($token, $appToken)
    {
      $this->token = $token;
      $this->appToken = $appToken;
    }

    /**
     * @return string
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param string $token
     * @return \Economic\ConnectWithToken
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppToken()
    {
      return $this->appToken;
    }

    /**
     * @param string $appToken
     * @return \Economic\ConnectWithToken
     */
    public function setAppToken($appToken)
    {
      $this->appToken = $appToken;
      return $this;
    }

}
