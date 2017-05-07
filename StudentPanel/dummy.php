<?php
  if(isset($_POST['submit'])){
      echo 'helo';
  }
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="fileupload">
           
            <button type="button" name="submit">Submit</button>
        </form>
    </body>
</html>