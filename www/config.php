<?php
   $host        = getenv('HOST');
   $port        = getenv('DB_PORT');
   $dbname      = getenv('DB_NAME');
   $credentials = getenv('CREDENTIALS');

   echo $host.'<br>';
   echo $port.'<br>';
   echo $dbname.'<br>';
   echo $credentials.'<br>';

//    $db = pg_connect( "$host $port $dbname $credentials"  );
//    if(!$db) {
//       echo "Error : Unable to open database\n";
//    } else {
//       echo "Opened database successfully\n";
//    }
   
// //    $sql =<<<EOF
// //       CREATE TABLE users
// //       (ID SERIAL PRIMARY KEY     NOT NULL,
// //       NAME           TEXT    NOT NULL,
// //       EMAIL          VARCHAR(100) NOT NULL,
// //       AGE            INT     NOT NULL,
// //       ADDRESS        CHAR(50),
// //       SALARY         REAL);
// // EOF;
//    $sql =<<<EOF
//       INSERT INTO users (NAME,EMAIL,AGE,ADDRESS,SALARY)
//       VALUES ('Amit','amitdagar4096@gmail.com', 32, 'Palwal', 20000.00 );
// EOF;

//    $ret = pg_query($db, $sql);
//    if(!$ret) {
//       echo pg_last_error($db);
//    } else {
//       echo "Records created successfully\n";
//    }
//    pg_close($db);
?>