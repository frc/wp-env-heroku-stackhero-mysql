<?php
namespace Frc\WP\Env\Heroku\StackheroMYSQL;

// Database Host
// ----------------------------------------------------------------
if (getenv('STACKHERO_MYSQL_HOST')):
  $databaseHost = parse_url(getenv('STACKHERO_MYSQL_HOST'));
  putenv('DB_HOST=' . $databaseHost['path']);
else:
  putenv('DB_HOST=localhost');
endif;

// Database Port
// ----------------------------------------------------------------
if (getenv('STACKHERO_MYSQL_PORT')):
  putenv('DB_PORT=' . getenv('STACKHERO_MYSQL_PORT'));
endif;

// Database User
// ----------------------------------------------------------------
if (getenv('STACKHERO_MYSQL_USER')):
  $databaseUser = parse_url(getenv('STACKHERO_MYSQL_USER'));
  putenv('DB_USER=' . $databaseUser['path']);
else:
  putenv('DB_USER=root');
endif;

// Database Password
// ----------------------------------------------------------------
if (getenv('STACKHERO_MYSQL_PASSWORD')):
  $databasePassword = parse_url(getenv('STACKHERO_MYSQL_PASSWORD'));
  putenv('DB_PASSWORD=' . $databasePassword['path']);
endif;

// Database Name
// ----------------------------------------------------------------
if (getenv('STACKHERO_MYSQL_DATABASE_NAME')):
  $databaseName = parse_url(getenv('STACKHERO_MYSQL_DATABASE_NAME'));
  putenv('DB_NAME=' . $databaseName['path']);
endif;