<?php

namespace Economic;

class Debtor_FindByEmail
{

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @param string $email
     */
    public function __construct($email)
    {
      $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Economic\Debtor_FindByEmail
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
