<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Strings Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in strings throughout the system.
    | Regardless where it is placed, a string can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'permissions' => [
                'edit_explanation' => 'If you performed operations in the hierarchy section without refreshing this page, you will need to refresh to reflect the changes here.',

                'groups' => [
                    'hierarchy_saved' => 'Hierarchy successfully saved.',
                ],

                'sort_explanation' => 'This section allows you to organize your permissions into groups to stay organized. Regardless of the group, the permissions are still individually assigned to each role.',
            ],

            'users' => [
                'delete_user_confirm' => 'Are you sure you want to delete this user permanently? Anywhere in the application that references this user\'s id will most likely error. Proceed at your own risk. This can not be un-done.',
                'if_confirmed_off' => '(If confirmed is off)',
                'restore_user_confirm' => 'Restore this user to its original state?',
            ],
        ],

        'dashboard' => [
            'title' => '管理面板',
            'welcome' => '欢迎',
        ],

        'general' => [
            'all_rights_reserved' => '版权所有。',
            'are_you_sure' => '确定吗？',
            'boilerplate_link' => 'Laravel 5 Boilerplate',
            'continue' => 'Continue',
            'member_since' => 'Member since',
            'search_placeholder' => '搜索...',

            'see_all' => [
                'messages' => '查看所有消息',
                'notifications' => '查看所有通知',
                'tasks' => '查看所有任务',
            ],

            'status' => [
                'online' => '在线',
                'offline' => '离线',
            ],

            'you_have' => [
                'messages' => '{0} 没有消息|{1} 您有1个消息|[2,Inf] 您有:number个消息',
                'notifications' => '{0} 没有通知|{1} 您有1个通知|[2,Inf] 您有:number个通知',
                'tasks' => '{0} 没有任务|{1} 您有1个任务|[2,Inf] 您有:number个任务',
            ],
        ],
    ],

    'emails' => [
        'auth' => [
            'password_reset_subject' => '您的密码重置链接',
            'reset_password' => '点击这里重置您的密码',
        ],
    ],

    'frontend' => [
        'email' => [
            'confirm_account' => '点击这里确认您的帐号:',
        ],

        'test' => '测试',

        'tests' => [
            'based_on' => [
                'permission' => 'Permission Based - ',
                'role' => 'Role Based - ',
            ],

            'js_injected_from_controller' => 'Javascript Injected from a Controller',

            'using_blade_extensions' => 'Using Blade Extensions',

            'using_access_helper' => [
                'array_permissions' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does have to possess all.',
                'array_permissions_not' => 'Using Access Helper with Array of Permission Names or ID\'s where the user does not have to possess all.',
                'array_roles' => 'Using Access Helper with Array of Role Names or ID\'s where the user does have to possess all.',
                'array_roles_not' => 'Using Access Helper with Array of Role Names or ID\'s where the user does not have to possess all.',
                'permission_id' => 'Using Access Helper with Permission ID',
                'permission_name' => 'Using Access Helper with Permission Name',
                'role_id' => 'Using Access Helper with Role ID',
                'role_name' => 'Using Access Helper with Role Name',
            ],

            'view_console_it_works' => 'View console, you should see \'it works!\' which is coming from FrontendController@index',
            'you_can_see_because' => 'You can see this because you have the role of \':role\'!',
            'you_can_see_because_permission' => 'You can see this because you have the permission of \':permission\'!',
        ],

        'user' => [
            'profile_updated' => '个人档案更新成功。',
            'password_updated' => '密码更新成功。',
        ],

        'welcome_to' => 'Welcome to :place',
    ],
];