<?php

namespace Economic;

class CreditorContact_CreateFromData
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
     * @return \Economic\CreditorContact_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
