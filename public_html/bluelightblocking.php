<?

$comment = $_REQUEST["review"];

if ($comment == "")
{
	echo "Enter a comment.";
	return false;
}

$file = "BLBComments.txt";
$fp = fopen($file, "a") or die ("Couldn't open $file for writing!");
fwrite($fp, $comment . "\r\n") or die ("Couldn't write the comment");
fwrite($fp, date("d/m/y : H:i:s", time())) or die ("Couldn't find the time");
fwrite($fp, "\r\n\r\n") or die ("Couldn't find the space");
fclose($fp);
echo "Review was successful.";

?>