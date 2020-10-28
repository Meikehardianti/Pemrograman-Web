<?php 

function connection(){
   // membuat koneksi kedatabase system
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = 'curriculum_vitae';

   $conn= mysqli_connect($dbServer, $dbUser, $dbPass);

   if(! $conn){
      die('koneksi gagal : ' . mysqli_error());
   }
   mysqli_select_db($conn,$dbName);
   return $conn;
 }
