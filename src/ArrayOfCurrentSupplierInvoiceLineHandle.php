<?php

namespace Economic;

class ArrayOfCurrentSupplierInvoiceLineHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrentSupplierInvoiceLineHandle[] $CurrentSupplierInvoiceLineHandle
     */
    protected $CurrentSupplierInvoiceLineHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrentSupplierInvoiceLineHandle[]
     */
    public function getCurrentSupplierInvoiceLineHandle()
    {
      return $this->CurrentSupplierInvoiceLineHandle;
    }

    /**
     * @param CurrentSupplierInvoiceLineHandle[] $CurrentSupplierInvoiceLineHandle
     * @return \Economic\ArrayOfCurrentSupplierInvoiceLineHandle
     */
    public function setCurrentSupplierInvoiceLineHandle(array $CurrentSupplierInvoiceLineHandle = null)
    {
      $this->CurrentSupplierInvoiceLineHandle = $CurrentSupplierInvoiceLineHandle;
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
      return isset($this->CurrentSupplierInvoiceLineHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrentSupplierInvoiceLineHandle
     */
    public function offsetGet($offset)
    {
      return $this->CurrentSupplierInvoiceLineHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrentSupplierInvoiceLineHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrentSupplierInvoiceLineHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrentSupplierInvoiceLineHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrentSupplierInvoiceLineHandle Return the current element
     */
    public function current()
    {
      return current($this->CurrentSupplierInvoiceLineHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrentSupplierInvoiceLineHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrentSupplierInvoiceLineHandle);
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
      reset($this->CurrentSupplierInvoiceLineHandle);
    }

    /**
     * Countable implementation
     *
     * @return CurrentSupplierInvoiceLineHandle Return count of elements
     */
    public function count()
    {
      return count($this->CurrentSupplierInvoiceLineHandle);
    }

}
