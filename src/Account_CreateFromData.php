<?php

namespace Economic;

class Account_CreateFromData
{

    /**
     * @var AccountData $data
     */
    protected $data = null;

    /**
     * @param AccountData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return AccountData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param AccountData $data
     * @return \Economic\Account_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
