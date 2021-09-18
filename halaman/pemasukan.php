<?php
if (isset($_SESSION['buka']) && $_SESSION['buka'] == "ok")
{


}
else{
	header("Location: 404.php");
}
?>