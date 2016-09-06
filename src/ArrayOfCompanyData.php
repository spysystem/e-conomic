<?php

namespace Economic;

class ArrayOfCompanyData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CompanyData[] $CompanyData
     */
    protected $CompanyData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompanyData[]
     */
    public function getCompanyData()
    {
      return $this->CompanyData;
    }

    /**
     * @param CompanyData[] $CompanyData
     * @return \Economic\ArrayOfCompanyData
     */
    public function setCompanyData(array $CompanyData = null)
    {
      $this->CompanyData = $CompanyData;
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
      return isset($this->CompanyData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompanyData
     */
    public function offsetGet($offset)
    {
      return $this->CompanyData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompanyData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CompanyData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CompanyData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CompanyData Return the current element
     */
    public function current()
    {
      return current($this->CompanyData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CompanyData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CompanyData);
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
      reset($this->CompanyData);
    }

    /**
     * Countable implementation
     *
     * @return CompanyData Return count of elements
     */
    public function count()
    {
      return count($this->CompanyData);
    }

}
