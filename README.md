## Installation

Make sure you have [composer](https://getcomposer.org/) installed locally.

In the project root, run the following to install the PHP dependencies (including WordPress).


```
composer install
```

Enter `Y` when asked if you want to create the salts and generate the `.env` file.

### Config

Edit `.env` in your text editor, adding the database credentials and the path to the `public` directory as `WP_HOME`.

```
ZERO_ENV=development

WP_HOME=http://zero.local

ZERO_WEB_ROOT=public
ZERO_WP_DIR=wp
ZERO_DB_PREFIX=wp_

DB_NAME=zero
DB_USER=root
DB_PASSWORD=pwd
DB_HOST=localhost

EMPTY_TRASH_DAYS=7
WP_POST_REVISIONS=2
```

### WP Installation

Load the `WP_HOME` URL in your browser, and complete the standard WP installation process.
