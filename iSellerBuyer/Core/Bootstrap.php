
<?php

require '../Core/Database/Connection.php';
require '../Core/Database/QueryBuilder.php';
require '../Core/Router.php';
$config = require '../Config.php';

// connecting to the database
return DBconnection::makeConnection($config['database']);