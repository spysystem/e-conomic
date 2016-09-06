<?php

namespace Economic;

class CreditorContact_Create
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param string $name
     */
    public function __construct($creditorHandle, $name)
    {
      $this->creditorHandle = $creditorHandle;
      $this->name = $name;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorHandle()
    {
      return $this->creditorHandle;
    }

    /**
     * @param CreditorHandle $creditorHandle
     * @return \Economic\CreditorContact_Create
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
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
     * @return \Economic\CreditorContact_Create
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
