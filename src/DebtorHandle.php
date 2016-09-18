<?php

namespace Economic;

/**
 * Class DebtorHandle
 *
 * @package Economic
 */
class DebtorHandle
{

    /**
     * @var string $Number
     */
    protected $Number = null;


	/**
	 * DebtorHandle constructor.
	 */
	public function __construct()
    {
    
    }

	/**
	 * @param $strNumber
	 *
	 * @return DebtorHandle
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
     * @return \Economic\DebtorHandle
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
