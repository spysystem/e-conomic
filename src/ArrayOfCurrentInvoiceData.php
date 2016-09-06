<?php

namespace Economic;

class ArrayOfCurrentInvoiceData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrentInvoiceData[] $CurrentInvoiceData
     */
    protected $CurrentInvoiceData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrentInvoiceData[]
     */
    public function getCurrentInvoiceData()
    {
      return $this->CurrentInvoiceData;
    }

    /**
     * @param CurrentInvoiceData[] $CurrentInvoiceData
     * @return \Economic\ArrayOfCurrentInvoiceData
     */
    public function setCurrentInvoiceData(array $CurrentInvoiceData = null)
    {
      $this->CurrentInvoiceData = $CurrentInvoiceData;
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
      return isset($this->CurrentInvoiceData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrentInvoiceData
     */
    public function offsetGet($offset)
    {
      return $this->CurrentInvoiceData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrentInvoiceData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrentInvoiceData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrentInvoiceData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrentInvoiceData Return the current element
     */
    public function current()
    {
      return current($this->CurrentInvoiceData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrentInvoiceData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrentInvoiceData);
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
      reset($this->CurrentInvoiceData);
    }

    /**
     * Countable implementation
     *
     * @return CurrentInvoiceData Return count of elements
     */
    public function count()
    {
      return count($this->CurrentInvoiceData);
    }

}
