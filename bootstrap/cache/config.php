<?php return array (
  'app' => 
  array (
    'name' => 'nisseieblo',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost/nissei/public',
    'asset_url' => NULL,
    'front_url' => 'http://localhost/nissei',
    'timezone' => 'Asia/Bangkok',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:MVtuBfoJRPcBdM5o6R0pz4uD8chk25EnCdAJobEimsw=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Barryvdh\\DomPDF\\ServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
      27 => 'Modules\\Installer\\Providers\\LaravelInstallerServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'api',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'jwt',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'Modules\\User\\Models\\User\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\nissei\\storage\\framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
      ),
    ),
    'prefix' => 'nisseieblo_cache',
  ),
  'core' => 
  array (
    'table_prefix' => 'eblo',
    'acl' => 
    array (
      'users_table' => 'eblo_users',
      'clients_table' => 'eblo_clients',
      'password_resets_table' => 'eblo_password_resets',
      'roles_table' => 'eblo_roles',
      'departments_table' => 'eblo_departments',
      'departments_roles_table' => 'eblo_departments_roles',
      'menu_table' => 'eblo_menus',
      'department_role_menu_table' => 'eblo_department_role_menu',
      'user_role_department' => 'eblo_user_role_department',
      'translations_table' => 'eblo_translations',
      'todos_table' => 'eblo_todos',
      'announcements_table' => 'eblo_announcements',
      'meetings' => 'eblo_meetings',
      'meeting_members' => 'eblo_meeting_members',
      'teams' => 'eblo_teams',
      'teams_members' => 'eblo_teams_members',
      'users_settings_table' => 'eblo_user_settings',
      'dashboard_settings_table' => 'eblo_dashboard_settings',
      'database_backups_table' => 'eblo_database_backups',
      'holiday_table' => 'eblo_holidays',
      'email_group_table' => 'eblo_email_template_groups',
      'email_template_table' => 'eblo_email_template',
      'user_activities_table' => 'eblo_user_activities',
      'email_inbox_table' => 'eblo_email_inbox',
      'inbox_attachment_table' => 'eblo_email_inbox_attachment',
      'folder_table' => 'eblo_folders',
      'files_table' => 'eblo_files',
      'countries_table' => 'eblo_countries',
      'languages_table' => 'eblo_languages',
      'locales_table' => 'eblo_locales',
      'currency' => 'eblo_currency',
      'modules_table' => 'eblo_modules',
      'form_table' => 'eblo_form',
      'custom_fields' => 'eblo_custom_fields',
      'timesheets_table' => 'eblo_timesheets',
      'slack_table' => 'eblo_slack_integration',
      'slack_settings_table' => 'eblo_slack_settings',
      'projects_table' => 'eblo_projects',
      'project_user_table' => 'eblo_project_user',
      'project_comments_table' => 'eblo_project_comments',
      'project_attachments_table' => 'eblo_project_attachments',
      'task_table' => 'eblo_tasks',
      'task_user_table' => 'eblo_task_user',
      'task_comments_table' => 'eblo_task_comments',
      'task_attachments_table' => 'eblo_task_attachments',
      'defects_table' => 'eblo_defects',
      'defects_user_table' => 'eblo_defect_user',
      'defect_comments_table' => 'eblo_defect_comments',
      'defect_attachments_table' => 'eblo_defect_attachments',
      'defects_history_table' => 'eblo_defects_history',
      'incidents_table' => 'eblo_incidents',
      'incident_user_table' => 'eblo_incident_user',
      'incident_comments_table' => 'eblo_incident_comments',
      'incident_attachments_table' => 'eblo_incident_attachments',
      'incident_history_table' => 'eblo_incident_history',
      'project_sprints_table' => 'eblo_project_sprints',
      'project_sprint_members_table' => 'eblo_project_sprint_members',
      'project_sprint_tasks_table' => 'eblo_project_sprint_tasks',
      'project_sprint_task_members_table' => 'eblo_project_sprint_task_members',
      'knowledge_base_category_table' => 'eblo_knowledge_base_category',
      'knowledge_base_article_table' => 'eblo_knowledge_base_article',
      'providers_table' => 'eblo_providers',
      'appointment_table' => 'eblo_appointment',
      'leave_types_table' => 'eblo_leave_types',
      'leaves_table' => 'eblo_leaves',
      'leave_attachments_table' => 'eblo_leave_attachments',
      'taxes_table' => 'eblo_taxes',
      'items_table' => 'eblo_items',
      'item_tax_table' => 'eblo_item_tax',
      'estimate_settings_table' => 'eblo_estimate_settings',
      'estimates_table' => 'eblo_estimates',
      'estimate_items_table' => 'eblo_estimate_items',
      'estimate_item_taxes_table' => 'eblo_estimate_item_taxes',
      'invoice_settings_table' => 'eblo_invoice_settings',
      'invoices_table' => 'eblo_invoices',
      'invoice_items_table' => 'eblo_invoice_items',
      'invoice_item_taxes_table' => 'eblo_invoice_item_taxes',
      'payment_methods_table' => 'eblo_payment_methods',
      'payment_gateway_settings_table' => 'eblo_payment_gateway_settings',
      'payments_table' => 'eblo_payments',
      'user' => 'Modules\\User\\Models\\User\\User',
      'clients_model' => 'Modules\\Client\\Models\\Client',
      'role' => 'Modules\\User\\Models\\Role\\Role',
      'department' => 'Modules\\User\\Models\\Department\\Department',
      'announcement' => 'Modules\\Announcement\\Models\\Announcement',
      'meeting_model' => 'Modules\\Meeting\\Models\\Meeting',
      'team_model' => 'Modules\\Team\\Models\\Team',
      'todo_model' => 'Modules\\ToDo\\Models\\ToDo',
      'user_setting_model' => 'Modules\\Setting\\Models\\Setting',
      'user_activity' => 'Modules\\UserActivity\\Models\\UserActivity',
      'mailbox' => 'Modules\\Mailbox\\Models\\Mailbox',
      'mailbox_attachment' => 'Modules\\Mailbox\\Models\\MailboxAttachment',
      'file' => 'Modules\\FileBrowser\\Models\\File',
      'file_browser' => 'Modules\\FileBrowser\\Models\\FileBrowser',
      'email_template' => 'Modules\\EmailTemplate\\Models\\EmailTemplate',
      'form' => 'Modules\\CustomField\\Models\\Form',
      'custom_field' => 'Modules\\CustomField\\Models\\CustomField',
      'timesheet_model' => 'Modules\\Timesheet\\Models\\Timesheet',
      'slack_model' => 'Modules\\Slack\\Models\\Slack',
      'project_model' => 'Modules\\Projects\\Models\\Project',
      'project_comment_model' => 'Modules\\ProjectComment\\Models\\ProjectComment',
      'project_attachment_model' => 'Modules\\ProjectAttachment\\Models\\ProjectAttachment',
      'task_model' => 'Modules\\Task\\Models\\Task',
      'task_comment_model' => 'Modules\\TaskComment\\Models\\TaskComment',
      'task_attachment_model' => 'Modules\\TaskAttachment\\Models\\TaskAttachment',
      'defects_model' => 'Modules\\Defect\\Models\\Defect',
      'defect_comment_model' => 'Modules\\DefectComment\\Models\\DefectComment',
      'defect_attachment_model' => 'Modules\\DefectAttachment\\Models\\DefectAttachment',
      'defects_history_model' => 'Modules\\Defect\\Models\\DefectHistory',
      'incidents_model' => 'Modules\\Incident\\Models\\Incident',
      'incident_comment_model' => 'Modules\\IncidentComment\\Models\\IncidentComment',
      'incident_attachment_model' => 'Modules\\IncidentAttachment\\Models\\IncidentAttachment',
      'incident_history_model' => 'Modules\\Incident\\Models\\IncidentHistory',
      'project_planner_sprint_model' => 'Modules\\ProjectPlannerSprint\\Models\\ProjectPlannerSprint',
      'project_planner_sprint_task_model' => 'Modules\\ProjectSprintTask\\Models\\ProjectSprintTask',
      'knowledge_base_category_model' => 'Modules\\KnowledgeBaseCategory\\Models\\KnowledgeBaseCategory',
      'knowledge_base_article_model' => 'Modules\\KnowledgeBaseArticle\\Models\\KnowledgeBaseArticle',
      'appointment_model' => 'Modules\\Appointments\\Models\\Appointment',
      'provider_model' => 'Modules\\Provider\\Models\\Provider',
      'leave_type_model' => 'Modules\\LeaveType\\Models\\LeaveType',
      'leave_model' => 'Modules\\Leave\\Models\\Leave',
      'leave_attachment_model' => 'Modules\\Leave\\Models\\LeaveAttachment',
      'tax_model' => 'Modules\\Tax\\Models\\Tax',
      'estimate_item_model' => 'Modules\\Estimate\\Models\\EstimateItem',
      'invoice_model' => 'Modules\\Invoice\\Models\\Invoice',
      'invoice_item_model' => 'Modules\\Invoice\\Models\\InvoiceItem',
      'payment_model' => 'Modules\\Payment\\Models\\Payment',
    ),
    'EMAIL_ACTIVATION_EXPIRE' => 172800,
    'FORGOT_PASSWORD_EXPIRE' => 86400,
    'COMPANY_NAME' => 'nisseieblo',
    'support_mail_id' => 'thuan_dinh@eblo.co.jp',
    'max_length' => 255,
    'product_version' => 2.0,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'nissei_eblo',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'nissei_eblo',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'nissei_eblo',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'nissei_eblo',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'database - Copy' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'nissei_eblo',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'nissei_eblo',
        'username' => 'root',
        'password' => '',
        'unix_socket' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => false,
        'engine' => NULL,
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'nissei_eblo',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'nissei_eblo',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 0,
      ),
      'cache' => 
      array (
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => 1,
      ),
    ),
  ),
  'dompdf' => 
  array (
    'show_warnings' => true,
    'orientation' => 'portrait',
    'defines' => 
    array (
      'font_dir' => 'C:\\xampp\\htdocs\\nissei\\storage\\fonts/',
      'font_cache' => 'C:\\xampp\\htdocs\\nissei\\storage\\fonts/',
      'temp_dir' => 'C:\\Users\\PC\\AppData\\Local\\Temp',
      'chroot' => 'C:\\xampp\\htdocs\\nissei',
      'enable_font_subsetting' => false,
      'pdf_backend' => 'CPDF',
      'default_media_type' => 'screen',
      'default_paper_size' => 'a4',
      'default_font' => 'serif',
      'dpi' => 96,
      'enable_php' => false,
      'enable_javascript' => true,
      'enable_remote' => true,
      'font_height_ratio' => 1.1,
      'enable_html5_parser' => true,
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\storage\\app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\storage\\app/public',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'url' => NULL,
      ),
      'user_avtar' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/profile',
      ),
      'login_bg' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/login_bg',
      ),
      'company_logo' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/company_logo',
      ),
      'company_sidebar_logo' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/company_sidebar_logo',
      ),
      'sidebar_background_images' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/sidebar_background_images',
      ),
      'translation' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/translation',
      ),
      'project_uploads' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/project',
      ),
      'project_attachment' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/project_attachment',
      ),
      'task_attachment' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/task_attachment',
      ),
      'defect' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/defect',
      ),
      'defect_attachment' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/defect_attachment',
      ),
      'incident_attachment' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/incident_attachment',
      ),
      'category_attachment' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/category_attachment',
      ),
      'article_attachment' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/article_attachment',
      ),
      'leave_attachment' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/leave_attachment',
      ),
      'estimate_logo' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/estimate_logo',
      ),
      'invoice_logo' => 
      array (
        'driver' => 'local',
        'root' => 'C:\\xampp\\htdocs\\nissei\\public/uploads/invoice_logo',
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'jwt' => 
  array (
    'secret' => 'yuzzhRrcg5NvjhPwXtCBjhVilwUczN0MBkQJyTU3IgbwaXMnDH24erackLZmUQUL',
    'keys' => 
    array (
      'public' => NULL,
      'private' => NULL,
      'passphrase' => NULL,
    ),
    'ttl' => 120,
    'refresh_ttl' => 20160,
    'algo' => 'HS256',
    'required_claims' => 
    array (
      0 => 'iss',
      1 => 'iat',
      2 => 'exp',
      3 => 'nbf',
      4 => 'sub',
      5 => 'jti',
    ),
    'persistent_claims' => 
    array (
    ),
    'lock_subject' => true,
    'leeway' => 0,
    'blacklist_enabled' => true,
    'blacklist_grace_period' => 0,
    'decrypt_cookies' => false,
    'providers' => 
    array (
      'jwt' => 'Tymon\\JWTAuth\\Providers\\JWT\\Namshi',
      'auth' => 'Tymon\\JWTAuth\\Providers\\Auth\\Illuminate',
      'storage' => 'Tymon\\JWTAuth\\Providers\\Storage\\Illuminate',
    ),
  ),
  'laraupdater' => 
  array (
    'tmp_path' => 'C:/tmp',
    'update_baseurl' => 'http://chetsapp.de:8886',
    'middleware' => 
    array (
      0 => 'web',
    ),
    'allow_users_id' => 
    array (
      0 => 1,
    ),
    'update_url' => 'http://adminpanel.sw/api/verify/purchase_code',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'daily',
        ),
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => 'C:\\xampp\\htdocs\\nissei\\storage\\logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => 'C:\\xampp\\htdocs\\nissei\\storage\\logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'from' => 
    array (
      'address' => 'thuandinhdev@gmail.com',
      'name' => 'nisseieblo',
    ),
    'encryption' => 'tls',
    'username' => 'thuandinhdev@gmail.com',
    'password' => 'yqgjfpizlpsqoizs',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\nissei\\resources\\views/vendor/mail',
      ),
    ),
    'log_channel' => NULL,
  ),
  'modules' => 
  array (
    'namespace' => 'Modules',
    'stubs' => 
    array (
      'enabled' => false,
      'path' => 'C:\\xampp\\htdocs\\nissei/vendor/nwidart/laravel-modules/src/Commands/stubs',
      'files' => 
      array (
        'routes/web' => 'Routes/web.php',
        'routes/api' => 'Routes/api.php',
        'scaffold/config' => 'Config/config.php',
        'composer' => 'composer.json',
      ),
      'replacements' => 
      array (
        'routes/web' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
        ),
        'routes/api' => 
        array (
          0 => 'LOWER_NAME',
        ),
        'json' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'MODULE_NAMESPACE',
        ),
        'scaffold/config' => 
        array (
          0 => 'STUDLY_NAME',
        ),
        'composer' => 
        array (
          0 => 'LOWER_NAME',
          1 => 'STUDLY_NAME',
          2 => 'VENDOR',
          3 => 'AUTHOR_NAME',
          4 => 'AUTHOR_EMAIL',
          5 => 'MODULE_NAMESPACE',
        ),
      ),
      'gitkeep' => true,
    ),
    'paths' => 
    array (
      'modules' => 'C:\\xampp\\htdocs\\nissei\\Modules',
      'assets' => 'C:\\xampp\\htdocs\\nissei\\public\\modules',
      'migration' => 'C:\\xampp\\htdocs\\nissei\\database/migrations',
      'generator' => 
      array (
        'config' => 
        array (
          'path' => 'Config',
          'generate' => false,
        ),
        'command' => 
        array (
          'path' => 'Console',
          'generate' => false,
        ),
        'migration' => 
        array (
          'path' => 'Database/Migrations',
          'generate' => true,
        ),
        'seeder' => 
        array (
          'path' => 'Database/Seeders',
          'generate' => true,
        ),
        'factory' => 
        array (
          'path' => 'Database/factories',
          'generate' => true,
        ),
        'model' => 
        array (
          'path' => 'Models',
          'generate' => true,
        ),
        'controller' => 
        array (
          'path' => 'Http/Controllers',
          'generate' => true,
        ),
        'filter' => 
        array (
          'path' => 'Http/Middleware',
          'generate' => true,
        ),
        'request' => 
        array (
          'path' => 'Http/Requests',
          'generate' => true,
        ),
        'provider' => 
        array (
          'path' => 'Providers',
          'generate' => true,
        ),
        'assets' => 
        array (
          'path' => 'Resources/assets',
          'generate' => false,
        ),
        'lang' => 
        array (
          'path' => 'Resources/lang',
          'generate' => false,
        ),
        'views' => 
        array (
          'path' => 'Resources/views',
          'generate' => false,
        ),
        'test' => 
        array (
          'path' => 'Tests',
          'generate' => true,
        ),
        'repository' => 
        array (
          'path' => 'Repositories',
          'generate' => true,
        ),
        'event' => 
        array (
          'path' => 'Events',
          'generate' => false,
        ),
        'listener' => 
        array (
          'path' => 'Listeners',
          'generate' => false,
        ),
        'policies' => 
        array (
          'path' => 'Policies',
          'generate' => false,
        ),
        'rules' => 
        array (
          'path' => 'Rules',
          'generate' => true,
        ),
        'jobs' => 
        array (
          'path' => 'Jobs',
          'generate' => false,
        ),
        'emails' => 
        array (
          'path' => 'Emails',
          'generate' => false,
        ),
        'notifications' => 
        array (
          'path' => 'Notifications',
          'generate' => false,
        ),
        'resource' => 
        array (
          'path' => 'Transformers',
          'generate' => false,
        ),
      ),
    ),
    'scan' => 
    array (
      'enabled' => false,
      'paths' => 
      array (
        0 => 'C:\\xampp\\htdocs\\nissei\\vendor/*/*',
      ),
    ),
    'composer' => 
    array (
      'vendor' => 'vipspatel',
      'author' => 
      array (
        'name' => 'Vips Patel',
        'email' => 'info@chetsapp.com',
      ),
    ),
    'cache' => 
    array (
      'enabled' => false,
      'key' => 'laravel-modules',
      'lifetime' => 60,
    ),
    'register' => 
    array (
      'translations' => true,
      'files' => 'register',
    ),
  ),
  'queue' => 
  array (
    'default' => 'database',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'responsecache' => 
  array (
    'enabled' => false,
    'cache_profile' => 'Spatie\\ResponseCache\\CacheProfiles\\CacheAllSuccessfulGetRequests',
    'cache_lifetime_in_minutes' => 10080,
    'add_cache_time_header' => true,
    'cache_store' => 'file',
    'cache_tag' => '',
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => '',
      'secret' => '',
      'endpoint' => 'api.mailgun.net',
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => '',
    ),
    'mandrill' => 
    array (
      'secret' => '',
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
      'webhook' => 
      array (
        'secret' => NULL,
        'tolerance' => 300,
      ),
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => 'C:\\xampp\\htdocs\\nissei\\storage\\framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'nisseieblo_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => false,
    'http_only' => true,
    'same_site' => NULL,
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nissei\\resources\\views',
    ),
    'compiled' => 'C:\\xampp\\htdocs\\nissei\\storage\\framework\\views',
  ),
  'debug-server' => 
  array (
    'host' => 'tcp://127.0.0.1:9912',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 30,
  ),
  'announcement' => 
  array (
    'name' => 'Announcement',
  ),
  'seo' => 
  array (
    'name' => 'Seo',
  ),
  'options' => 
  array (
    'name' => 'Options',
  ),
  'payment' => 
  array (
    'name' => 'Payment',
  ),
  'Posts' => 
  array (
    'name' => 'Posts',
  ),
  'projectattachment' => 
  array (
    'name' => 'ProjectAttachment',
  ),
  'projectcomment' => 
  array (
    'name' => 'ProjectComment',
  ),
  'projectplannersprint' => 
  array (
    'name' => 'ProjectPlannerSprint',
  ),
  'projectsprinttask' => 
  array (
    'name' => 'ProjectSprintTask',
  ),
  'projects' => 
  array (
    'name' => 'Projects',
  ),
  'provider' => 
  array (
    'name' => 'Provider',
  ),
  'region' => 
  array (
    'name' => 'Region',
  ),
  'setting' => 
  array (
    'name' => 'Setting',
  ),
  'meeting' => 
  array (
    'name' => 'Meeting',
  ),
  'slack' => 
  array (
    'name' => 'Slack',
  ),
  'task' => 
  array (
    'name' => 'Task',
  ),
  'taskattachment' => 
  array (
    'name' => 'TaskAttachment',
  ),
  'taskcomment' => 
  array (
    'name' => 'TaskComment',
  ),
  'tax' => 
  array (
    'name' => 'Tax',
  ),
  'team' => 
  array (
    'name' => 'Team',
  ),
  'timesheet' => 
  array (
    'name' => 'Timesheet',
  ),
  'todo' => 
  array (
    'name' => 'ToDo',
  ),
  'translation' => 
  array (
    'name' => 'Translation',
  ),
  'user' => 
  array (
    'name' => 'User',
  ),
  'menu' => 
  array (
    'name' => 'Menu',
  ),
  'mailbox' => 
  array (
    'name' => 'Mailbox',
  ),
  'appointments' => 
  array (
    'name' => 'Appointments',
  ),
  'filebrowser' => 
  array (
    'name' => 'FileBrowser',
  ),
  'client' => 
  array (
    'name' => 'Client',
  ),
  'collections' => 
  array (
    'name' => 'Collections',
  ),
  'customfield' => 
  array (
    'name' => 'CustomField',
  ),
  'databasebackup' => 
  array (
    'name' => 'DatabaseBackup',
  ),
  'defect' => 
  array (
    'name' => 'Defect',
  ),
  'defectattachment' => 
  array (
    'name' => 'DefectAttachment',
  ),
  'defectcomment' => 
  array (
    'name' => 'DefectComment',
  ),
  'emailgroup' => 
  array (
    'name' => 'EmailGroup',
  ),
  'emailtemplate' => 
  array (
    'name' => 'EmailTemplate',
  ),
  'estimate' => 
  array (
    'name' => 'Estimate',
  ),
  'helper' => 
  array (
    'name' => 'Helper',
  ),
  'leavetype' => 
  array (
    'name' => 'LeaveType',
  ),
  'holiday' => 
  array (
    'name' => 'Holiday',
  ),
  'incident' => 
  array (
    'name' => 'Incident',
  ),
  'incidentattachment' => 
  array (
    'name' => 'IncidentAttachment',
  ),
  'incidentcomment' => 
  array (
    'name' => 'IncidentComment',
  ),
  'installer' => 
  array (
    'name' => 'Installer',
  ),
  'invoice' => 
  array (
    'name' => 'Invoice',
  ),
  'item' => 
  array (
    'name' => 'Item',
  ),
  'knowledgebasearticle' => 
  array (
    'name' => 'KnowledgeBaseArticle',
  ),
  'knowledgebasecategory' => 
  array (
    'name' => 'KnowledgeBaseCategory',
  ),
  'leave' => 
  array (
    'name' => 'Leave',
  ),
  'useractivity' => 
  array (
    'name' => 'UserActivity',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
