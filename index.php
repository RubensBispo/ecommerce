<?php
	
  require_once("vendor/autoload.php");
  
  $app = new \Slim\Slim();
  
  $app->config('debug', true);
  
  $app->get('/', function() 
  {
    try 
    {
      $sql = new \Hcode\DB\Sql();
      if ($sql)
      {
	$results = $sql->select("select * from tb_users");
	echo json_encode($results);
      }
    }
    catch (Exception $e)
    {
      print_r($e->getMessage());
    }
    
});
  $app->run();
?> 
