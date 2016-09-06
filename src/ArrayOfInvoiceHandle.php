<?php

namespace Economic;

class ArrayOfInvoiceHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InvoiceHandle[] $InvoiceHandle
     */
    protected $InvoiceHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InvoiceHandle[]
     */
    public function getInvoiceHandle()
    {
      return $this->InvoiceHandle;
    }

    /**
     * @param InvoiceHandle[] $InvoiceHandle
     * @return \Economic\ArrayOfInvoiceHandle
     */
    public function setInvoiceHandle(array $InvoiceHandle = null)
    {
      $this->InvoiceHandle = $InvoiceHandle;
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
      return isset($this->InvoiceHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InvoiceHandle
     */
    public function offsetGet($offset)
    {
      return $this->InvoiceHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InvoiceHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->InvoiceHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->InvoiceHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InvoiceHandle Return the current element
     */
    public function current()
    {
      return current($this->InvoiceHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InvoiceHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InvoiceHandle);
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
      reset($this->InvoiceHandle);
    }

    /**
     * Countable implementation
     *
     * @return InvoiceHandle Return count of elements
     */
    public function count()
    {
      return count($this->InvoiceHandle);
    }

}
