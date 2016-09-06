<?php

namespace Economic;

class ArrayOfCurrentInvoiceLineHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrentInvoiceLineHandle[] $CurrentInvoiceLineHandle
     */
    protected $CurrentInvoiceLineHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrentInvoiceLineHandle[]
     */
    public function getCurrentInvoiceLineHandle()
    {
      return $this->CurrentInvoiceLineHandle;
    }

    /**
     * @param CurrentInvoiceLineHandle[] $CurrentInvoiceLineHandle
     * @return \Economic\ArrayOfCurrentInvoiceLineHandle
     */
    public function setCurrentInvoiceLineHandle(array $CurrentInvoiceLineHandle = null)
    {
      $this->CurrentInvoiceLineHandle = $CurrentInvoiceLineHandle;
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
      return isset($this->CurrentInvoiceLineHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrentInvoiceLineHandle
     */
    public function offsetGet($offset)
    {
      return $this->CurrentInvoiceLineHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrentInvoiceLineHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrentInvoiceLineHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrentInvoiceLineHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrentInvoiceLineHandle Return the current element
     */
    public function current()
    {
      return current($this->CurrentInvoiceLineHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrentInvoiceLineHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrentInvoiceLineHandle);
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
      reset($this->CurrentInvoiceLineHandle);
    }

    /**
     * Countable implementation
     *
     * @return CurrentInvoiceLineHandle Return count of elements
     */
    public function count()
    {
      return count($this->CurrentInvoiceLineHandle);
    }

}
