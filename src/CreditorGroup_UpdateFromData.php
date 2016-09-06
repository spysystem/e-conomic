<?php

namespace Economic;

class CreditorGroup_UpdateFromData
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
     * @return \Economic\CreditorGroup_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
