<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Spryker\Zed\Auth\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use Spryker\Zed\Auth\Communication\Form\LoginForm;
use Spryker\Zed\Auth\Communication\Form\ResetPasswordForm;
use Spryker\Zed\Auth\Communication\Form\ResetPasswordRequestForm;
use Spryker\Zed\User\Business\UserFacade;
use Spryker\Zed\Auth\AuthDependencyProvider;
use Spryker\Zed\Auth\AuthConfig;
use Spryker\Zed\Auth\Persistence\AuthQueryContainer;

/**
 * @method AuthConfig getConfig()
 * @method AuthQueryContainer getQueryContainer()
 */
class AuthCommunicationFactory extends AbstractCommunicationFactory
{

    /**
     * @return LoginForm
     */
    public function createLoginForm()
    {
        $loginForm = new LoginForm();

        return $this->createForm($loginForm);
    }

    /**
     * @return ResetPasswordRequestForm
     */
    public function createResetPasswordRequestForm()
    {
        return new ResetPasswordRequestForm();
    }

    /**
     * @return ResetPasswordForm
     */
    public function createResetPasswordForm()
    {
        return new ResetPasswordForm();
    }

    /**
     * @return UserFacade
     */
    public function createUserFacade()
    {
        return $this->getProvidedDependency(AuthDependencyProvider::FACADE_USER);
    }

}
