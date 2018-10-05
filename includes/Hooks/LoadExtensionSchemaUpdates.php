<?php

namespace Shanept\LdapAuth\Hooks;

use DatabaseUpdater;

class LoadExtensionSchemaUpdates
{
    public static function go(DatabaseUpdater $updater)
    {
        $schema = __DIR__ . '/../sql/user_ldapauth_user.sql';
        $updater->addExtensionTable('user_ldapauth_user', $schema, true);

        return true;
    }
}