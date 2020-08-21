<?php

namespace NTI\KeycloakAdminBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class KeycloakAdminExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        $container->setParameter("nti.keycloak.admin.user.destination.id.method", $config["user_destination_get_method"]);
        $container->setParameter("nti.keycloak.admin.user.auth.roles", $config["user_authentication_roles"]);

        $container->setParameter("nti.keycloak.admin.user.granted.roles", array());
        $container->setParameter("nti.keycloak.admin.route.prefix", "nti/notify");
        $container->setParameter("nti.keycloak.admin.route.prefix.parsed", "/nti/notify/");

    }

    public function getAlias()
    {
        return 'nti_keycloak_admin';
    }
}
