<?php

namespace Economic;

class Connect
{

    /**
     * @var int $agreementNumber
     */
    protected $agreementNumber = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param int $agreementNumber
     * @param string $userName
     * @param string $password
     */
    public function __construct($agreementNumber, $userName, $password)
    {
      $this->agreementNumber = $agreementNumber;
      $this->userName = $userName;
      $this->password = $password;
    }

    /**
     * @return int
     */
    public function getAgreementNumber()
    {
      return $this->agreementNumber;
    }

    /**
     * @param int $agreementNumber
     * @return \Economic\Connect
     */
    public function setAgreementNumber($agreementNumber)
    {
      $this->agreementNumber = $agreementNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Economic\Connect
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \Economic\Connect
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
