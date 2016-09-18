<?php

namespace Economic;

/**
 * Class ArrayOfCreditorHandle
 *
 * @package Economic
 */
class ArrayOfCreditorHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditorHandle[] $CreditorHandle
     */
    protected $CreditorHandle = null;


	/**
	 * ArrayOfCreditorHandle constructor.
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
		foreach ($this as $oCreditorHandle)
		{
			$arrAccountNos[$oCreditorHandle->getNumber()]	= $oCreditorHandle->getNumber();
		}

		return  $arrAccountNos;
	}

    /**
     * @return CreditorHandle[]
     */
    public function getCreditorHandle()
    {
      return $this->CreditorHandle;
    }

    /**
     * @param CreditorHandle[] $CreditorHandle
     * @return \Economic\ArrayOfCreditorHandle
     */
    public function setCreditorHandle(array $CreditorHandle = null)
    {
      $this->CreditorHandle = $CreditorHandle;
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
      return isset($this->CreditorHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditorHandle
     */
    public function offsetGet($offset)
    {
      return $this->CreditorHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditorHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CreditorHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CreditorHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditorHandle Return the current element
     */
    public function current()
    {
      return current($this->CreditorHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditorHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditorHandle);
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
      reset($this->CreditorHandle);
    }

    /**
     * Countable implementation
     *
     * @return CreditorHandle Return count of elements
     */
    public function count()
    {
      return count($this->CreditorHandle);
    }

}
