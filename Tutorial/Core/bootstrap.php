

<?php

require 'Core/Database/Connection.php';
require 'Core/Database/Querybuilder.php';
require 'Router.php';
$Mconfig= require 'Config.php';


return new QueryBuilder( dbConnecton::makeCon($Mconfig['database']));



