<?php

$rules = [
    'declare_strict_types' => true,
];

$finder = new PhpCsFixer\Finder();
$finder->in(__DIR__);

$config = new PhpCsFixer\Config();
$config->setRiskyAllowed(true);
$config->setRules($rules);
$config->setFinder($finder);

return $config;
