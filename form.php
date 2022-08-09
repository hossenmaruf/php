  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form</title>
  </head>

  <body>

      <form action="contact.php" method="POST">

          <label> UserName </label>


          <input type="text" name="user_name"><br>


          <label> UserEmail </label>



          <input type="email" name="user_email"><br>
          <label> password </label>
          <input type="password" name="user_password"><br>

          <br>

          <input type="submit" value="submit Data" name="btn">


          <br>



      </form>


      <form action="file" method="POST" enctype="multipart/form-data"  >

          <br><input type="file" name="upload_img">

          <br>

          <br><input type="submit" name="submit_img" value="submit_img">




      </form>






  </body>

  </html>