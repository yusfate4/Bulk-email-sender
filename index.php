<?php
require 'assets/php/mail.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Bulk Mail Sender</title>
  </head>
  <body>
    <section>
      <main>
        <h2>BULK MAIL SENDER</h2>
        <form method="post" enctype="multipart/form-data">
          <input type="text" name="email" placeholder="From (Email)" /> <br />
          <textarea
            name="receive_email"
            id="email"
            cols="30"
            rows="10"
            placeholder="To (Emails)"
          ></textarea>
          <span><?= $receive_email_error; ?></span>
          <!-- <input type="text" name="email" placeholder="To (Email)"> <br> -->
          <input type="button" name="btn" /> <br />
          <!-- <input type="text" name="reply" placeholder="Reply-to: (Optional)"> <br> -->
          <input type="text" name="subject" placeholder="Subject:" /> <br />
          <textarea name="message" id="default"></textarea>

          <br />
          <input name="send" type="submit" value="send message" />
        </form>
      </main>
    </section>

    <script src="assets/tinymce/tinymce.min.js"></script>
    <script src="assets/js/script.js">

    </script>
  </body>
</html>
