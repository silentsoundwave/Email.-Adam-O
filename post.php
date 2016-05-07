<?php

$_POST = ($_FILES);
$_FILES = ($image);

if(isset($_POST['post.php']));{

mail('xseanxxxthomasx@gmail.com', 'My Subject', $_POST['post']);

}

echo 'your message has been sent!'

?>

<form>
<input type="text" action="get_addr(myemail@whatever.com)" method="post" placeholder="Type Your Message">
<input type="submit" name="post.php"
</form>


