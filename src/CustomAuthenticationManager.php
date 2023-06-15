<?php

declare(strict_types=1);

/*
 * SwaggerPetstoreLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SwaggerPetstoreLib;

use CoreInterfaces\Core\Request\RequestSetterInterface;
use Core\Authentication\CoreAuth;

/**
 * Utility class for authorization and token management.
 */
class CustomAuthenticationManager extends CoreAuth implements CustomAuthenticationCredentials
{
    private $config;

    private $password;

    /**
     * Returns an instance of this class.
     *
     * @param string $password
     */
    public function __construct(string $password, ConfigurationInterface $config)
    {
        parent::__construct();
        $this->config = $config;
        $this->password = $password;
    }

    /**
     * String value for password.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $password
     */
    public function equals(string $password): bool
    {
        return $password == $this->password;
    }

    /**
     * Adds authentication parameters to request.
     */
    public function apply(RequestSetterInterface $request): void
    {
        // TODO: Add your custom authentication here
        // The following properties are available to use
        //     $this->getPassword()
        //
        // i.e Add a header through:
        //     $request->addHeader('key', 'value');
    }
}
