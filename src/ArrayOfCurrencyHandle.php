<?php

namespace Economic;

class ArrayOfCurrencyHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrencyHandle[] $CurrencyHandle
     */
    protected $CurrencyHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrencyHandle[]
     */
    public function getCurrencyHandle()
    {
      return $this->CurrencyHandle;
    }

    /**
     * @param CurrencyHandle[] $CurrencyHandle
     * @return \Economic\ArrayOfCurrencyHandle
     */
    public function setCurrencyHandle(array $CurrencyHandle = null)
    {
      $this->CurrencyHandle = $CurrencyHandle;
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
      return isset($this->CurrencyHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrencyHandle
     */
    public function offsetGet($offset)
    {
      return $this->CurrencyHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrencyHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrencyHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrencyHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrencyHandle Return the current element
     */
    public function current()
    {
      return current($this->CurrencyHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrencyHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrencyHandle);
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
      reset($this->CurrencyHandle);
    }

    /**
     * Countable implementation
     *
     * @return CurrencyHandle Return count of elements
     */
    public function count()
    {
      return count($this->CurrencyHandle);
    }

}
