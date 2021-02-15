<?php namespace EvolutionCMS\Users;

use \EvolutionCMS\Models\User;
use EvolutionCMS\Users\Actions\UserClearSettings;
use EvolutionCMS\Users\Actions\UserGeneratePassword;
use EvolutionCMS\Users\Actions\UserGetVerifiedKey;
use EvolutionCMS\Users\Actions\UserGetValues;
use EvolutionCMS\Users\Actions\UserHashChangePassword;
use EvolutionCMS\Users\Actions\UserLoginById;
use EvolutionCMS\Users\Actions\UserManagerChangePassword;
use EvolutionCMS\Users\Actions\UserChangePassword;
use EvolutionCMS\Users\Actions\UserDelete;
use EvolutionCMS\Users\Actions\UserEdit;
use EvolutionCMS\Users\Actions\UserHashLogin;
use EvolutionCMS\Users\Actions\UserLogin;
use EvolutionCMS\Users\Actions\UserLogout;
use EvolutionCMS\Users\Actions\UserRefreshToken;
use EvolutionCMS\Users\Actions\UserRegistration;
use EvolutionCMS\Users\Actions\UserRepairPassword;
use EvolutionCMS\Users\Actions\UserSaveSettings;
use EvolutionCMS\Users\Actions\UserSaveValues;
use EvolutionCMS\Users\Actions\UserSetGroups;
use EvolutionCMS\Users\Actions\UserSetRole;
use EvolutionCMS\Users\Actions\UserVerified;

class UserManager
{

    public function get($id)
    {
        return User::find($id);
    }

    public function create(array $userData, bool $events = true, bool $cache = true)
    {
        $registration = new UserRegistration($userData, $events, $cache);
        return $registration->process();
    }

    public function edit(array $userData, bool $events = true, bool $cache = true)
    {
        $userEdit = new UserEdit($userData, $events, $cache);
        return $userEdit->process();
    }

    public function delete(array $userData, bool $events = true, bool $cache = true)
    {
        $username = new UserDelete($userData, $events, $cache);
        return $username->process();
    }

    public function repairPassword($userData, bool $events = true, bool $cache = true)
    {
        $userHash = new UserRepairPassword($userData, $events, $cache);
        return $userHash->process();
    }

    public function changeManagerPassword($userData, bool $events = true, bool $cache = true)
    {
        $user = new UserManagerChangePassword($userData, $events, $cache);
        return $user->process();
    }

    public function changePassword($userData, bool $events = true, bool $cache = true)
    {
        $user = new UserChangePassword($userData, $events, $cache);
        return $user->process();
    }

    public function hashChangePassword($userData, bool $events = true, bool $cache = true)
    {
        $user = new UserHashChangePassword($userData, $events, $cache);
        return $user->process();
    }

    public function setRole(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserSetRole($userData, $events, $cache);
        return $user->process();
    }

    public function setGroups(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserSetGroups($userData, $events, $cache);
        return $user->process();
    }

    public function login(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserLogin($userData, $events, $cache);
        return $user->process();
    }

    public function loginById(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserLoginById($userData, $events, $cache);
        return $user->process();
    }

    public function hashLogin(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserHashLogin($userData, $events, $cache);
        return $user->process();
    }

    public function logout(array $userData = [], bool $events = true, bool $cache = true)
    {
        $user = new UserLogout($userData, $events, $cache);
        return $user->process();
    }

    public function saveSettings(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserSaveSettings($userData, $events, $cache);
        return $user->process();
    }

    public function saveValues(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserSaveValues($userData, $events, $cache);
        return $user->process();
    }

    public function getValues(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserGetValues($userData, $events, $cache);
        return $user->process();
    }

    public function clearSettings(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserClearSettings($userData, $events, $cache);
        return $user->process();
    }

    public function refreshToken(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserRefreshToken($userData, $events, $cache);
        return $user->process();
    }

    public function generateAndSavePassword(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserGeneratePassword($userData, $events, $cache);
        return $user->process();
    }

    public function getVerifiedKey(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserGetVerifiedKey($userData, $events, $cache);
        return $user->process();
    }

    public function verified(array $userData, bool $events = true, bool $cache = true)
    {
        $user = new UserVerified($userData, $events, $cache);
        return $user->process();
    }

}
