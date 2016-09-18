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
	 */
	public function __construct()
    {
    }

	/**
	 * @param $strCode
	 *
	 * @return CurrencyHandle
	 */
	public static function Create($strCode)
	{
	$oHandle	= new self();
	$oHandle->setCode($strCode);

	return $oHandle;
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
