<?php

namespace Economic;

class ArrayOfCurrentSupplierInvoiceHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrentSupplierInvoiceHandle[] $CurrentSupplierInvoiceHandle
     */
    protected $CurrentSupplierInvoiceHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrentSupplierInvoiceHandle[]
     */
    public function getCurrentSupplierInvoiceHandle()
    {
      return $this->CurrentSupplierInvoiceHandle;
    }

    /**
     * @param CurrentSupplierInvoiceHandle[] $CurrentSupplierInvoiceHandle
     * @return \Economic\ArrayOfCurrentSupplierInvoiceHandle
     */
    public function setCurrentSupplierInvoiceHandle(array $CurrentSupplierInvoiceHandle = null)
    {
      $this->CurrentSupplierInvoiceHandle = $CurrentSupplierInvoiceHandle;
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
      return isset($this->CurrentSupplierInvoiceHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrentSupplierInvoiceHandle
     */
    public function offsetGet($offset)
    {
      return $this->CurrentSupplierInvoiceHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrentSupplierInvoiceHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrentSupplierInvoiceHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrentSupplierInvoiceHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrentSupplierInvoiceHandle Return the current element
     */
    public function current()
    {
      return current($this->CurrentSupplierInvoiceHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrentSupplierInvoiceHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrentSupplierInvoiceHandle);
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
      reset($this->CurrentSupplierInvoiceHandle);
    }

    /**
     * Countable implementation
     *
     * @return CurrentSupplierInvoiceHandle Return count of elements
     */
    public function count()
    {
      return count($this->CurrentSupplierInvoiceHandle);
    }

}
