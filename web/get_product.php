<?php
include("connect.php");

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;
$productId = $_GET["product_id"];
$stmt = $db->prepare("SELECT * FROM products WHERE id =:id");
$bind = $stmt->bindValue(":id", $productId, PDO::PARAM_INT);
$stmt->execute();

while($row= $stmt->fetch(PDO::FETCH_ASSOC)) {
 echo $row["subscription"];
}

?>
