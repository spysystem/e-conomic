<?php

namespace Economic;

class Currency_FindByCode
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param string $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Economic\Currency_FindByCode
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
