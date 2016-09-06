<?php

namespace Economic;

class CreditorGroup_CreateFromData
{

    /**
     * @var CreditorGroupData $data
     */
    protected $data = null;

    /**
     * @param CreditorGroupData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CreditorGroupData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CreditorGroupData $data
     * @return \Economic\CreditorGroup_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
