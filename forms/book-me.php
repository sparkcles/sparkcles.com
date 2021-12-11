<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $mailFrom = $_POST['date'];
        $name = $_POST['type'];

        $mailTo = " sparkcles@mail.com";
        $headers = "From: ".$nameFrom;
        $txt = "New contact from " .$name.".\n\n".$message;

        mail(mailTo, $subject, $headers, $txt);
        header("Location: index.php?mailsend");
    }

?>