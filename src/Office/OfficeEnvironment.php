<?php

declare(strict_types=1);

namespace Worldline\Sips\Office;

use Exception;
use Worldline\Sips\Common\SipsEnvironment;

class OfficeEnvironment extends SipsEnvironment
{
    protected array $possibleEnvironments = [
        'SIMU' => 'https://office-server.simu.sips-atos.com/',
        'TEST' => 'https://office-server.test.sips-atos.com/',
        'PROD' => 'https://office-server.sips-atos.com/',
    ];

    protected $environment;

    /**
     * SipsEnvironment constructor.
     *
     * @throws \Exception
     */
    public function __construct(string $environment)
    {
        if (\array_key_exists(mb_strtoupper($environment), $this->possibleEnvironments)) {
            $this->environment = $this->possibleEnvironments[$environment];
        } else {
            throw new Exception('Invalid environment. Choose between SIMU, TEST or PROD');
        }
    }
}
