<?php

namespace Economic;

class ArrayOfCreditorContactHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditorContactHandle[] $CreditorContactHandle
     */
    protected $CreditorContactHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditorContactHandle[]
     */
    public function getCreditorContactHandle()
    {
      return $this->CreditorContactHandle;
    }

    /**
     * @param CreditorContactHandle[] $CreditorContactHandle
     * @return \Economic\ArrayOfCreditorContactHandle
     */
    public function setCreditorContactHandle(array $CreditorContactHandle = null)
    {
      $this->CreditorContactHandle = $CreditorContactHandle;
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
      return isset($this->CreditorContactHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditorContactHandle
     */
    public function offsetGet($offset)
    {
      return $this->CreditorContactHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditorContactHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CreditorContactHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CreditorContactHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditorContactHandle Return the current element
     */
    public function current()
    {
      return current($this->CreditorContactHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditorContactHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditorContactHandle);
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
      reset($this->CreditorContactHandle);
    }

    /**
     * Countable implementation
     *
     * @return CreditorContactHandle Return count of elements
     */
    public function count()
    {
      return count($this->CreditorContactHandle);
    }

}
