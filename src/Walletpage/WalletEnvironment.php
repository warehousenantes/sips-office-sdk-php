<?php


namespace Worldline\Sips\WalletPage;


use Worldline\Sips\Common\SipsEnvironment;

class WalletEnvironment extends SipsEnvironment
{
    private $possibleEnvironments = [
        "SIMU" => "https://payment-webinit.simu.sips-atos.com/",
        "TEST" => "https://payment-webinit.test.sips-atos.com/",
        "PROD" => "https://payment-webinit.sips-atos.com/",
    ];
    protected $environment;

    /**
     * PaypageEnvironment constructor.
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