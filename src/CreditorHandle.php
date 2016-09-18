<?php

namespace Economic;

/**
 * Class CreditorHandle
 *
 * @package Economic
 */
class CreditorHandle
{

    /**
     * @var string $Number
     */
    protected $Number = null;


	/**
	 * CreditorHandle constructor.
	 */
	public function __construct()
    {
    
    }

	/**
	 * @param $strNumber
	 *
	 * @return CreditorHandle
	 */
	public static function Create($strNumber)
	{
	$oHandle	= new self();
	$oHandle->setNumber($strNumber);

	return $oHandle;
	}
    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Economic\CreditorHandle
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
