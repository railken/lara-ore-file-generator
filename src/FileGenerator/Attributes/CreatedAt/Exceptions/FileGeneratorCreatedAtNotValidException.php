<?php

namespace Railken\LaraOre\FileGenerator\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\FileGenerator\Exceptions\FileGeneratorAttributeException;

class FileGeneratorCreatedAtNotValidException extends FileGeneratorAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'FILEGENERATOR_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}