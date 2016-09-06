<?php

namespace Economic;

class ArrayOfCreditorGroupHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditorGroupHandle[] $CreditorGroupHandle
     */
    protected $CreditorGroupHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditorGroupHandle[]
     */
    public function getCreditorGroupHandle()
    {
      return $this->CreditorGroupHandle;
    }

    /**
     * @param CreditorGroupHandle[] $CreditorGroupHandle
     * @return \Economic\ArrayOfCreditorGroupHandle
     */
    public function setCreditorGroupHandle(array $CreditorGroupHandle = null)
    {
      $this->CreditorGroupHandle = $CreditorGroupHandle;
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
      return isset($this->CreditorGroupHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditorGroupHandle
     */
    public function offsetGet($offset)
    {
      return $this->CreditorGroupHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditorGroupHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CreditorGroupHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CreditorGroupHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditorGroupHandle Return the current element
     */
    public function current()
    {
      return current($this->CreditorGroupHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditorGroupHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditorGroupHandle);
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
      reset($this->CreditorGroupHandle);
    }

    /**
     * Countable implementation
     *
     * @return CreditorGroupHandle Return count of elements
     */
    public function count()
    {
      return count($this->CreditorGroupHandle);
    }

}
