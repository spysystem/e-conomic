<?php

namespace Economic;

class ArrayOfCurrentInvoiceHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrentInvoiceHandle[] $CurrentInvoiceHandle
     */
    protected $CurrentInvoiceHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrentInvoiceHandle[]
     */
    public function getCurrentInvoiceHandle()
    {
      return $this->CurrentInvoiceHandle;
    }

    /**
     * @param CurrentInvoiceHandle[] $CurrentInvoiceHandle
     * @return \Economic\ArrayOfCurrentInvoiceHandle
     */
    public function setCurrentInvoiceHandle(array $CurrentInvoiceHandle = null)
    {
      $this->CurrentInvoiceHandle = $CurrentInvoiceHandle;
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
      return isset($this->CurrentInvoiceHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrentInvoiceHandle
     */
    public function offsetGet($offset)
    {
      return $this->CurrentInvoiceHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrentInvoiceHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrentInvoiceHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrentInvoiceHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrentInvoiceHandle Return the current element
     */
    public function current()
    {
      return current($this->CurrentInvoiceHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrentInvoiceHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrentInvoiceHandle);
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
      reset($this->CurrentInvoiceHandle);
    }

    /**
     * Countable implementation
     *
     * @return CurrentInvoiceHandle Return count of elements
     */
    public function count()
    {
      return count($this->CurrentInvoiceHandle);
    }

}
