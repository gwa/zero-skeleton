<?php

defined('EMPTY_TRASH_DAYS')           or define('EMPTY_TRASH_DAYS', getenv('EMPTY_TRASH_DAYS'));
defined('WP_POST_REVISIONS')          or define('WP_POST_REVISIONS', getenv('WP_POST_REVISIONS'));
defined('AUTOMATIC_UPDATER_DISABLED') or define('AUTOMATIC_UPDATER_DISABLED', true);
defined('DISABLE_WP_CRON')            or define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON') ?: false);
defined('DISALLOW_FILE_MODS')         or define('DISALLOW_FILE_MODS', true);
