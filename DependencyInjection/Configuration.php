<?php

namespace Twitch\ApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('twitch_api');

        $rootNode
            ->children()
                ->arrayNode('client')
                    ->children()
                        ->scalarNode('id')
                            ->defaultNull()
                            ->info('Set Twitch client id')
                        ->end()
                        ->scalarNode('secret')
                            ->defaultNull()
                            ->info('Set Twitch client secret')
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
