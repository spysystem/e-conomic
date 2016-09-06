<?php

namespace Economic;

class BankPaymentType_FindByName
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Economic\BankPaymentType_FindByName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
