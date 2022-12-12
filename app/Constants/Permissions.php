<?php

namespace App\Constants;

class Permissions
{
    const MANAGE_PROJECTS = "Manage Projects";
    const MANAGE_EVENTS = "Manage Events";

    const MANAGE_PROJECT_TYPES = "Manage Project Types";
    const MANAGE_SERVICES = "Manage Services";

    const MANAGE_USERS = "Manage Users";

    const MANAGE_PERMISSIONS = "Manage Permissions";

    const MANAGE_TEAM = "Manage Team";

    const VIEW_INQUIRIES = "View Inquiries";

    public static function getAllPermissions(): array
    {
        return [
            self::MANAGE_PROJECTS,
            self::MANAGE_EVENTS,
            self::MANAGE_PROJECT_TYPES,
            self::MANAGE_SERVICES,
            self::MANAGE_USERS,
            self::MANAGE_PERMISSIONS,
            self::MANAGE_TEAM,
            self::VIEW_INQUIRIES,
        ];
    }


}
