<?php

namespace Economic;

class Creditor_CreateFromData
{

    /**
     * @var CreditorData $data
     */
    protected $data = null;

    /**
     * @param CreditorData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CreditorData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CreditorData $data
     * @return \Economic\Creditor_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
