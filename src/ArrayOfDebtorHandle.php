<?php

namespace Economic;

/**
 * Class ArrayOfDebtorHandle
 *
 * @package Economic
 */
class ArrayOfDebtorHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DebtorHandle[] $DebtorHandle
     */
    protected $DebtorHandle = null;

	/**
	 * ArrayOfDebtorHandle constructor.
	 */
	public function __construct()
    {
    
    }

	/**
	 * @return string[]
	 */
	public function AsIndexedArray()
	{
		$arrAccountNos = [];
		foreach ($this as $oDebtorHandler)
		{
			$arrAccountNos[$oDebtorHandler->getNumber()]	= $oDebtorHandler->getNumber();
		}

		return  $arrAccountNos;
	}

    /**
     * @return DebtorHandle[]
     */
    public function getDebtorHandle()
    {
      return $this->DebtorHandle;
    }

    /**
     * @param DebtorHandle[] $DebtorHandle
     * @return \Economic\ArrayOfDebtorHandle
     */
    public function setDebtorHandle(array $DebtorHandle = null)
    {
      $this->DebtorHandle = $DebtorHandle;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DebtorHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DebtorHandle
     */
    public function offsetGet($offset)
    {
      return $this->DebtorHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DebtorHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DebtorHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DebtorHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DebtorHandle Return the current element
     */
    public function current()
    {
      return current($this->DebtorHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DebtorHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DebtorHandle);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DebtorHandle);
    }

    /**
     * Countable implementation
     *
     * @return DebtorHandle Return count of elements
     */
    public function count()
    {
      return count($this->DebtorHandle);
    }

}
