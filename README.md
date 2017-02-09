DoctrineExtraBundle
========================

Installing
----------------------------------
1) Add to your composer.json

    "require": {
        ...
        "igdr/doctrine-extra-bundle": "dev-master"
        ...
    }
    

2) Add to AppKernel:

    public function registerBundles()
    {
        $bundles = array(
        ...
        new Igdr\DoctrineExtraBundle\IgdrDoctrineExtraBundle(),
        ...

Features
-------------------------------------
...