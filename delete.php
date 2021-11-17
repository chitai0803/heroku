<?php
include './database/DBController.php';
$connect = mysqli_connect('mysql5037.site4now.net','a7c995_heroku','mysql1mysql1','db_a7c995_heroku');
if(!$connect){
    echo("Kết nối thất bại");
}
   if (isset($_GET["item_id"])){
       $item_id =$_GET["item_id"];
   }
    // echo ("$item_id");
    // // $sql = "DELETE FROM 'product' where item_id=$item_id";
    // // $query = mysqli_query($connect,$sql);
    // // header('location: category.php');
?>
<?php
    //  $item_id = $_GET['item_id'];
    //  echo ("$item_id");
     $sql = "DELETE FROM product where item_id=$item_id";
     $query = mysqli_query($connect,$sql);
     header('location: category.php');
?>
