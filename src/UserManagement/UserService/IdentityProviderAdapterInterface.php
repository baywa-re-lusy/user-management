<?php

namespace BayWaReLusy\UserManagement\UserService;

use BayWaReLusy\UserManagement\UserEntity;
use BayWaReLusy\UserManagement\UserManagementException;

/**
 * Describes what an Identity Provider must provide.
 */
interface IdentityProviderAdapterInterface
{
    /**
     * Get all users from the Identity Provider hydrated into a UserEntity array.
     * @return UserEntity[]
     * @throws UserManagementException
     */
    public function getAllUsers(): array;

    /**
     * Logout the connected user.
     * @param UserEntity $user
     * @return void
     * @throws UserManagementException
     */
    public function logout(UserEntity $user): void;
}
