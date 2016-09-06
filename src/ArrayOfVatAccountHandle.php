<?php

namespace Economic;

class ArrayOfVatAccountHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VatAccountHandle[] $VatAccountHandle
     */
    protected $VatAccountHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VatAccountHandle[]
     */
    public function getVatAccountHandle()
    {
      return $this->VatAccountHandle;
    }

    /**
     * @param VatAccountHandle[] $VatAccountHandle
     * @return \Economic\ArrayOfVatAccountHandle
     */
    public function setVatAccountHandle(array $VatAccountHandle = null)
    {
      $this->VatAccountHandle = $VatAccountHandle;
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
      return isset($this->VatAccountHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VatAccountHandle
     */
    public function offsetGet($offset)
    {
      return $this->VatAccountHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VatAccountHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->VatAccountHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->VatAccountHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VatAccountHandle Return the current element
     */
    public function current()
    {
      return current($this->VatAccountHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VatAccountHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VatAccountHandle);
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
      reset($this->VatAccountHandle);
    }

    /**
     * Countable implementation
     *
     * @return VatAccountHandle Return count of elements
     */
    public function count()
    {
      return count($this->VatAccountHandle);
    }

}
