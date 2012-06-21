<?php

class AhsayApi
{
   var $server_name;
   var $server_port;
   var $server_user;
   var $server_pass;
   var $debug;
   var $error;


   // Constructor
   function AhsayApi($server, $port, $username, $password)
   {
      $this->server_name = $server;
      $this->server_port = $port;
      $this->server_user = $username;
      $this->server_pass = $password;
      $this->debug;
   }



   // Enable / disable debugging
   function debug($which)
   {
      $this->debug = $which;
   }

}
?>