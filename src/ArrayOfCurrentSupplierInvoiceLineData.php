<?php

namespace Economic;

class ArrayOfCurrentSupplierInvoiceLineData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrentSupplierInvoiceLineData[] $CurrentSupplierInvoiceLineData
     */
    protected $CurrentSupplierInvoiceLineData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrentSupplierInvoiceLineData[]
     */
    public function getCurrentSupplierInvoiceLineData()
    {
      return $this->CurrentSupplierInvoiceLineData;
    }

    /**
     * @param CurrentSupplierInvoiceLineData[] $CurrentSupplierInvoiceLineData
     * @return \Economic\ArrayOfCurrentSupplierInvoiceLineData
     */
    public function setCurrentSupplierInvoiceLineData(array $CurrentSupplierInvoiceLineData = null)
    {
      $this->CurrentSupplierInvoiceLineData = $CurrentSupplierInvoiceLineData;
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
      return isset($this->CurrentSupplierInvoiceLineData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrentSupplierInvoiceLineData
     */
    public function offsetGet($offset)
    {
      return $this->CurrentSupplierInvoiceLineData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrentSupplierInvoiceLineData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrentSupplierInvoiceLineData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrentSupplierInvoiceLineData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrentSupplierInvoiceLineData Return the current element
     */
    public function current()
    {
      return current($this->CurrentSupplierInvoiceLineData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrentSupplierInvoiceLineData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrentSupplierInvoiceLineData);
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
      reset($this->CurrentSupplierInvoiceLineData);
    }

    /**
     * Countable implementation
     *
     * @return CurrentSupplierInvoiceLineData Return count of elements
     */
    public function count()
    {
      return count($this->CurrentSupplierInvoiceLineData);
    }

}
