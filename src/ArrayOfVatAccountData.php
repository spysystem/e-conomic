<?php

namespace Economic;

class ArrayOfVatAccountData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VatAccountData[] $VatAccountData
     */
    protected $VatAccountData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VatAccountData[]
     */
    public function getVatAccountData()
    {
      return $this->VatAccountData;
    }

    /**
     * @param VatAccountData[] $VatAccountData
     * @return \Economic\ArrayOfVatAccountData
     */
    public function setVatAccountData(array $VatAccountData = null)
    {
      $this->VatAccountData = $VatAccountData;
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
      return isset($this->VatAccountData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VatAccountData
     */
    public function offsetGet($offset)
    {
      return $this->VatAccountData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VatAccountData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->VatAccountData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->VatAccountData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VatAccountData Return the current element
     */
    public function current()
    {
      return current($this->VatAccountData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VatAccountData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VatAccountData);
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
      reset($this->VatAccountData);
    }

    /**
     * Countable implementation
     *
     * @return VatAccountData Return count of elements
     */
    public function count()
    {
      return count($this->VatAccountData);
    }

}
