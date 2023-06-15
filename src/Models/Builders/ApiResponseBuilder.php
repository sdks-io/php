<?php

declare(strict_types=1);

/*
 * SwaggerPetstoreLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SwaggerPetstoreLib\Models\Builders;

use Core\Utils\CoreHelper;
use SwaggerPetstoreLib\Models\ApiResponse;

/**
 * Builder for model ApiResponse
 *
 * @see ApiResponse
 */
class ApiResponseBuilder
{
    /**
     * @var ApiResponse
     */
    private $instance;

    private function __construct(ApiResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new api response Builder object.
     */
    public static function init(): self
    {
        return new self(new ApiResponse());
    }

    /**
     * Sets code field.
     */
    public function code(?int $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets message field.
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Initializes a new api response object.
     */
    public function build(): ApiResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
