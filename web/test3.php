<?php
$testVariable = "test";
function test($x)
{
    if($x == "test")
    {
        echo $x;
        return true;
    }
    else{
        echo $x;
        return false;
    }

}
if (test($testVariable)){
    echo "winning";
}
else{
    echo "losing";
}
?>
