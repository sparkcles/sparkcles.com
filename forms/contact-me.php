<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "sparkcles@mail.com";
        $headers = "From: ".$mailFrom;
        $txt = "New contact from ".$name.".\n\n".$message;

        mail(mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>