<?php
/**
 * Copyright (C) 2016-2017  SSilence
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

namespace SSilence\ImapClient;

/**
 * Class for all incoming messages
 *
 * @package    SSilence\ImapClient
 * @copyright  Copyright (c) Tobias Zeising (http://www.aditu.de)
 * @authors    Tobias Zeising <tobias.zeising@aditu.de>, sergey144010
 */
class Section
{
    /**
     * Structure current section
     *
     * @var object
     */
    private $_structure;

    /**
     * Body current section
     *
     * @var string
     */
    private $_body;

    /**
     * Set current property
     *
     * @param string $property it is property of the called object
     * @param object|string $value it is value of the called object
     * @throws ImapClientException
     */
    public function __set($property, $value)
    {
        switch($property)
        {
            case 'structure':
                $this->_structure = $value;
                break;
            case 'body':
                $this->_body = $value;
                break;
            default:
                throw new ImapClientException('Section object have only "structure" and "body" properties.');
        };
    }

    /**
     * Get current property
     *
     * @param string $property
     * @return object|string
     * @throws ImapClientException
     */
    public function __get($property)
    {
        switch($property)
        {
            case 'structure':
                return $this->_structure;
                break;
            case 'body':
                return $this->_body;
                break;
            default:
                throw new ImapClientException('Section object have only "structure" and "body" properties.');
        }
    }

    /**
     * Check isset() current object property
     *
     * @param string $property
     * @return object|string
     * @throws ImapClientException
     */
    public function __isset($property)
    {
        switch($property)
        {
            case 'structure':
                return $this->_structure;
                break;
            case 'body':
                return $this->_body;
                break;
            default:
                throw new ImapClientException('Section object have only "structure" and "body" properties.');
        }
    }

    /**
     * Unset current object property
     *
     * @param string $property
     * @throws ImapClientException
     */
    public function __unset($property)
    {
        throw new ImapClientException('Section object not supported unset.');
    }

    /**
     * Return $this->_body when object convert to string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_body;
    }
}