<?php

$host = getenv('HTTP_HOST');

if($host == "www.domain.de"){
    header("Location: http://www.domain.de/de.htm");
}

else if($host == "www.domain.com"){
    header("Location: http://www.domain.com/folder/index.html");
}

else if($host == "www.domain.net"){
    header("Location: http://www.domain.net/net.htm");
}

else if($host == "www.domain.org"){
    header("Location: http://www.domain2.ch/org.html");
}

else if($host == "www.domain.at"){
    header("Location: http://www.domain.at/at.htm");
}

else if($host == "www.domain.ch"){
    header("Location: http://www.domain.ch/ch.htm");
}

else if($host == "www.domain.li"){
    header("Location: http://www.domain.li/li.htm");
}
?>
