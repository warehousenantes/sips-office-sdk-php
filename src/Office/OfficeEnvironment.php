<?php

namespace Worldline\Sips\Office;


use Worldline\Sips\Common\SipsEnvironment;

class OfficeEnvironment extends SipsEnvironment
{
    private $possibleEnvironments = [
        "SIMU" => "https://office-server.simu.sips-atos.com/",
        "TEST" => "https://office-server.test.sips-atos.com/",
        "PROD" => "https://office-server.sips-atos.com/",
    ];
    protected $environment;

    /**
     * SipsEnvironment constructor.
     * @param string $environment
     * @throws \Exception
     */
    public function __construct(string $environment)
    {
        if (key_exists(strtoupper($environment), $this->possibleEnvironments)) {
            $this->environment = $this->possibleEnvironments[$environment];
        } else {
            throw new \Exception("Invalid environment. Choose between SIMU, TEST or PROD");
        }
    }
}