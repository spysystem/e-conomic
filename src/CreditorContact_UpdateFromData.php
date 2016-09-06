<?php

namespace Economic;

class CreditorContact_UpdateFromData
{

    /**
     * @var CreditorContactData $data
     */
    protected $data = null;

    /**
     * @param CreditorContactData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CreditorContactData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CreditorContactData $data
     * @return \Economic\CreditorContact_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
