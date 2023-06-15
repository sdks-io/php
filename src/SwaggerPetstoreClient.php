<?php

declare(strict_types=1);

/*
 * SwaggerPetstoreLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SwaggerPetstoreLib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use SwaggerPetstoreLib\Controllers\PetController;
use SwaggerPetstoreLib\Controllers\StoreController;
use SwaggerPetstoreLib\Controllers\UserController;
use SwaggerPetstoreLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class SwaggerPetstoreClient implements ConfigurationInterface
{
    private $pet;

    private $store;

    private $user;

    private $customAuthenticationManager;

    private $config;

    private $client;

    /**
     * @see SwaggerPetstoreClientBuilder::init()
     * @see SwaggerPetstoreClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->customAuthenticationManager = new CustomAuthenticationManager(
            $this->config['password'] ?? ConfigurationDefaults::PASSWORD,
            $this
        );
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::SERVER1)
            ->authManagers(['global' => $this->customAuthenticationManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return SwaggerPetstoreClientBuilder SwaggerPetstoreClientBuilder instance
     */
    public function toBuilder(): SwaggerPetstoreClientBuilder
    {
        return SwaggerPetstoreClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->password($this->customAuthenticationManager->getPassword())
            ->httpCallback($this->config['httpCallback'] ?? null);
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getCustomAuthenticationCredentials(): ?CustomAuthenticationCredentials
    {
        return $this->customAuthenticationManager;
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see SwaggerPetstoreClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see SwaggerPetstoreClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::SERVER1): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Pet Controller
     */
    public function getPetController(): PetController
    {
        if ($this->pet == null) {
            $this->pet = new PetController($this->client);
        }
        return $this->pet;
    }

    /**
     * Returns Store Controller
     */
    public function getStoreController(): StoreController
    {
        if ($this->store == null) {
            $this->store = new StoreController($this->client);
        }
        return $this->store;
    }

    /**
     * Returns User Controller
     */
    public function getUserController(): UserController
    {
        if ($this->user == null) {
            $this->user = new UserController($this->client);
        }
        return $this->user;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [
            Server::SERVER1 => 'https://petstore.swagger.io/v2',
            Server::SERVER2 => 'http://petstore.swagger.io/v2',
            Server::AUTH_SERVER => 'https://petstore.swagger.io/oauth'
        ]
    ];
}