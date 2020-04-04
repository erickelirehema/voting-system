<?php

namespace App\Role;

use App\User;

/**
 * Class RoleChecker
 * @package App\Role
 */
class RoleChecker
{
    /**
     * @param User $user
     * @param string $role
     * @return bool
     */
    public function check(User $user, string $role)
    {
        // Admin has everything
        if ($user->hasRole(UserRole::ROLE_ADMIN)) {
            return true;
        }
        else if($user->hasRole(UserRole::ROLE_MANAGEMENT)) {
            $managementRoles = UserRole::getAllowedRoles(UserRole::ROLE_MANAGEMENT);

            if (in_array($role, $managementRoles)) {
                return true;
            }
        }

        return $user->hasRole($role);
    }
}
