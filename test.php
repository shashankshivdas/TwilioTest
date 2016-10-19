<?php

$number= $_POST['5512295527'];
$body= $_POST['Body'];

header ('Content-Type: text/xml');
?>
<Response>
<Message>
Hello <?php echo $number ?>.
You said<?php echo $body ?>
</Message>
</Response>
