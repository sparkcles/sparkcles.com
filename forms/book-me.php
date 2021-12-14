<?php

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $type = $_POST['type'];

        $mailTo = "sparkcles@mail.com";
        $headers = "From: ".$mailFrom;
        $txt = "New commission request from " .$name.".\n\n".$message;

        mail(mailTo, $type, $txt, $headers);
        header("Location: index.php?mailsend");
    }

?>