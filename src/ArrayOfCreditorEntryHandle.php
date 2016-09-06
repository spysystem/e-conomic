<?php

namespace Economic;

class ArrayOfCreditorEntryHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreditorEntryHandle[] $CreditorEntryHandle
     */
    protected $CreditorEntryHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreditorEntryHandle[]
     */
    public function getCreditorEntryHandle()
    {
      return $this->CreditorEntryHandle;
    }

    /**
     * @param CreditorEntryHandle[] $CreditorEntryHandle
     * @return \Economic\ArrayOfCreditorEntryHandle
     */
    public function setCreditorEntryHandle(array $CreditorEntryHandle = null)
    {
      $this->CreditorEntryHandle = $CreditorEntryHandle;
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
      return isset($this->CreditorEntryHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreditorEntryHandle
     */
    public function offsetGet($offset)
    {
      return $this->CreditorEntryHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreditorEntryHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CreditorEntryHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CreditorEntryHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreditorEntryHandle Return the current element
     */
    public function current()
    {
      return current($this->CreditorEntryHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreditorEntryHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreditorEntryHandle);
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
      reset($this->CreditorEntryHandle);
    }

    /**
     * Countable implementation
     *
     * @return CreditorEntryHandle Return count of elements
     */
    public function count()
    {
      return count($this->CreditorEntryHandle);
    }

}
