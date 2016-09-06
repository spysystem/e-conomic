<?php

namespace Economic;

class Account_Create
{

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var AccountType $type
     */
    protected $type = null;

    /**
     * @param int $number
     * @param string $name
     * @param AccountType $type
     */
    public function __construct($number, $name, $type)
    {
      $this->number = $number;
      $this->name = $name;
      $this->type = $type;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\Account_Create
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
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
     * @return \Economic\Account_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return AccountType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param AccountType $type
     * @return \Economic\Account_Create
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
