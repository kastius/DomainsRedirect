<?php

$host = $_SERVER['SERVER_NAME'];

if($host == "www.domain.de"){
    header("Location: http://www.domain.de/de.php");
}

else if($host == "www.domain.at"){
    header("Location: http://www.domain.at/at.php");
}

else if($host == "www.domain.com"){
    header("Location: http://www.domain.com/com.php");
}

else if($host == "www.domain.net"){
    header("Location: http://www.domain.net/net.php");
}

else if($host == "www.domain.org"){
    header("Location: http://www.domain.org/org.php");
}

else if($host == "www.domain.ch"){
    header("Location: http://www.domain.ch/ch.php");
}

else if($host == "www.domain.li"){
    header("Location: http://www.domain.li/li.php");
}
?>
