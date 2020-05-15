<?php

namespace Mael\InterventionImageBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('mael_intervention_image');
        $treeBuilder->getRootNode()
            ->children()
                ->enumNode('driver')
                ->values(['gd', 'imagick'])
                ->defaultValue('gd')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}