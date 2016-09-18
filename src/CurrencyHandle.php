<?php

namespace Economic;

/**
 * Class CurrencyHandle
 *
 * @package Economic
 */
class CurrencyHandle
{

    /**
     * @var string $Code
     */
    protected $Code = null;


	/**
	 * CurrencyHandle constructor.
	 *
	 * @param string $Code
	 */
	public function __construct($Code)
    {
    	$this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Economic\CurrencyHandle
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
