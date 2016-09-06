<?php

namespace Economic;

class ArrayOfQuotationLineData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuotationLineData[] $QuotationLineData
     */
    protected $QuotationLineData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuotationLineData[]
     */
    public function getQuotationLineData()
    {
      return $this->QuotationLineData;
    }

    /**
     * @param QuotationLineData[] $QuotationLineData
     * @return \Economic\ArrayOfQuotationLineData
     */
    public function setQuotationLineData(array $QuotationLineData = null)
    {
      $this->QuotationLineData = $QuotationLineData;
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
      return isset($this->QuotationLineData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuotationLineData
     */
    public function offsetGet($offset)
    {
      return $this->QuotationLineData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuotationLineData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->QuotationLineData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->QuotationLineData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuotationLineData Return the current element
     */
    public function current()
    {
      return current($this->QuotationLineData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuotationLineData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuotationLineData);
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
      reset($this->QuotationLineData);
    }

    /**
     * Countable implementation
     *
     * @return QuotationLineData Return count of elements
     */
    public function count()
    {
      return count($this->QuotationLineData);
    }

}
