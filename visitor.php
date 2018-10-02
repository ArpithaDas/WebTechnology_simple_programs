<?php
$handle=fopen("counter.txt","r");
if(!$handle){
echo "couldnt open the file";
}
else{
$counter = (int)fread($handle,20);
fclose($handle);
$counter++;
echo "<h2>Hello you are the visitor of this page</h2>";
echo "<h2> you are visitor number" . $counter . "</h2>";
$handle=fopen("counter.txt","w");
fwrite($handle,$counter);
fclose($handle);
}
echo "<a href=visitor.html>GO TO MAIN PAGE</a>"
?>