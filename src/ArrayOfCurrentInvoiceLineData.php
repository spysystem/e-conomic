<?php

namespace Economic;

class ArrayOfCurrentInvoiceLineData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrentInvoiceLineData[] $CurrentInvoiceLineData
     */
    protected $CurrentInvoiceLineData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrentInvoiceLineData[]
     */
    public function getCurrentInvoiceLineData()
    {
      return $this->CurrentInvoiceLineData;
    }

    /**
     * @param CurrentInvoiceLineData[] $CurrentInvoiceLineData
     * @return \Economic\ArrayOfCurrentInvoiceLineData
     */
    public function setCurrentInvoiceLineData(array $CurrentInvoiceLineData = null)
    {
      $this->CurrentInvoiceLineData = $CurrentInvoiceLineData;
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
      return isset($this->CurrentInvoiceLineData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrentInvoiceLineData
     */
    public function offsetGet($offset)
    {
      return $this->CurrentInvoiceLineData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrentInvoiceLineData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrentInvoiceLineData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrentInvoiceLineData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrentInvoiceLineData Return the current element
     */
    public function current()
    {
      return current($this->CurrentInvoiceLineData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrentInvoiceLineData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrentInvoiceLineData);
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
      reset($this->CurrentInvoiceLineData);
    }

    /**
     * Countable implementation
     *
     * @return CurrentInvoiceLineData Return count of elements
     */
    public function count()
    {
      return count($this->CurrentInvoiceLineData);
    }

}
