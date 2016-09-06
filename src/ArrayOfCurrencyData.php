<?php

namespace Economic;

class ArrayOfCurrencyData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CurrencyData[] $CurrencyData
     */
    protected $CurrencyData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CurrencyData[]
     */
    public function getCurrencyData()
    {
      return $this->CurrencyData;
    }

    /**
     * @param CurrencyData[] $CurrencyData
     * @return \Economic\ArrayOfCurrencyData
     */
    public function setCurrencyData(array $CurrencyData = null)
    {
      $this->CurrencyData = $CurrencyData;
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
      return isset($this->CurrencyData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CurrencyData
     */
    public function offsetGet($offset)
    {
      return $this->CurrencyData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CurrencyData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CurrencyData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CurrencyData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CurrencyData Return the current element
     */
    public function current()
    {
      return current($this->CurrencyData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CurrencyData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CurrencyData);
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
      reset($this->CurrencyData);
    }

    /**
     * Countable implementation
     *
     * @return CurrencyData Return count of elements
     */
    public function count()
    {
      return count($this->CurrencyData);
    }

}
