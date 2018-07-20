<?php

namespace Railken\LaraOre\FileGenerator\Attributes\Name\Exceptions;

use Railken\LaraOre\FileGenerator\Exceptions\FileGeneratorAttributeException;

class FileGeneratorNameNotDefinedException extends FileGeneratorAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILEGENERATOR_NAME_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}