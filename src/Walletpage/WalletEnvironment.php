<?php

declare(strict_types=1);

namespace Worldline\Sips\Walletpage;

use Exception;
use Worldline\Sips\Common\SipsEnvironment;

class WalletEnvironment extends SipsEnvironment
{
    private array $possibleEnvironments = [
        'SIMU' => 'https://payment-webinit.simu.sips-atos.com/',
        'TEST' => 'https://payment-webinit.test.sips-atos.com/',
        'PROD' => 'https://payment-webinit.sips-atos.com/',
    ];

    protected $environment;

    /**
     * PaypageEnvironment constructor.
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
