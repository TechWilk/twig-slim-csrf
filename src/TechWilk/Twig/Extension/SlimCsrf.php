<?php

namespace TechWilk\Twig\Extension;

use Slim\Csrf\Guard;

class SlimCsrf extends \Twig_Extension implements Twig_Extension_GlobalsInterface
{

    /**
     * @var \Slim\Csrf\Guard
     */
    protected $csrf;
    
    /**
     * @param \Slim\Csrf\Guard $csrf
     */
    public function __construct(Guard $csrf)
    {
        $this->csrf = $csrf;
    }

    public function getGlobals()
    {
        // CSRF token name and value
        $csrfNameKey = $this->csrf->getTokenNameKey();
        $csrfValueKey = $this->csrf->getTokenValueKey();
        $csrfName = $this->csrf->getTokenName();
        $csrfValue = $this->csrf->getTokenValue();
        
        return [
            'csrf'   => [
                'keys' => [
                    'name'  => $csrfNameKey,
                    'value' => $csrfValueKey
                ],
                'name'  => $csrfName,
                'value' => $csrfValue
            ]
        ];
    }
}
