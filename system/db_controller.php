<?php

require "system/database.php";

connect_db();
@$db = new mysqli(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD);
$posts = get_all("SELECT * FROM loputoo.loputoo_kirjeldus k JOIN loputoo.loputoo_juhendaja j ON j.id=k.juhendaja_id");

/**
 * Take inserted data from form
 */
//$client = $_POST['client'];
//$data_1=$_POST;
//$data_2=$_POST;
//
//$data_1['pealkiri'] = $_POST['task_pealkiri'];
//$data_2['j_eesnimi'] = $_POST['task_juh_eesnimi'];
//$data_2['j_perenimi'] = $_POST['task_juh_perenimi'];
//$data_1['tyyp'] = $_POST['task_tyyp'];
//$data_1['loputoo_fail'] = $_POST['task_file'];
//
////Insert data into database
//insert('loputoo_kirjeldus', $data_1);
//insert('loputoo_juhendaja', $data_2);
//header("Location: /loputoo_ab/index.php");
//exit();