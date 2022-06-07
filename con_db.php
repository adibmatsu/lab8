<?php
define ('db user', 'root');
define ('db password','');
define ('db host', "localhost");
define ('db name', 'registration');

$conn = mysqli_connect (db_host, db_user, db_password, db_name);
$result = mysqli_query($conn, "select * from user");
while ($row = mysqli_fetch_array($result)){
    foreach($row as $key=>$value) {
    echo "$key = $value <br>\n";
    }
}

mysqli_free_result ($result);
mysqli_close($conn) ;

?>