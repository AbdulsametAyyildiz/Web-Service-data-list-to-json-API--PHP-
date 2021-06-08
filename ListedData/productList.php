<?php
include("connect.php");
class products{
    public $id="";
    public $productName="";
    public $productCost="";
    public $productPic="";
}

$productObject = new products();

$query = mysqli_query($connect,"select * from productTable");
$row = mysqli_num_rows($query);
$i=0;

echo("[");
while($show = mysqli_fetch_assoc($query)){
    $i=$i+1;
    $productObject->id=$show["id"];
    $productObject->productName=$show["productName"];
    $productObject->productCost=$show["productCost"];
    $productObject->productPic=$show["productPic"];
    
    echo(json_encode($productObject));
    
    if($i!=$row){
        echo(",");
    }
    
}
echo("]");

?>