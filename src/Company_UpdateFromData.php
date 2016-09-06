<?php

namespace Economic;

class Company_UpdateFromData
{

    /**
     * @var CompanyData $data
     */
    protected $data = null;

    /**
     * @param CompanyData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CompanyData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CompanyData $data
     * @return \Economic\Company_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
