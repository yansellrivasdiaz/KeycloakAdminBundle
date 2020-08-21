<?php

namespace NTI\KeycloakAdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
//use NTI\KeycloakAdminBundle\DependencyInjection\KeycloakAdminExtension;

class KeycloakAdminBundle extends Bundle
{
    /**
     * Overridden to allow for the custom extension alias.
     */
//    public function getContainerExtension()
//    {
//        if (null === $this->extension) {
//            $this->extension = new KeycloakAdminExtension();
//        }
//        return $this->extension;
//    }
}
