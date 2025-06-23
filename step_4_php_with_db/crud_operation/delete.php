<?php
include "connect_db.php";
$id = $_GET['id'];

$delete_query = "DELETE FROM user_info WHERE id='$id'";
$data = mysqli_query($conn,$delete_query);

if($data){
?>
<script>
    alert("Data deleted successfully!");
     window.open("http://localhost/learn_PHP/step_4_php_with_db/view.php","_self");
</script>
<?php
}else{
?>
<script>
    alert("Try again please!");
</script>
<?php
}


?>