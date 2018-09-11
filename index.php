<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <style>
    #conversation{
      overflow: scroll;
    }
    #conversation p:last-child{
      background-color: lightgreen;
    }
  </style>
  <body>
    <form role="form" id="formChat">
      <label for="user">User</label>
      <input type="text" id="user" name="user" value="">

      <div id="conversation" style="height: 200px; border: solid 1px #ccc"></div>

      <label for="message">Message</label>
      <input type="text" id="message" name="message" value="">

      <button type="button" name="button" id="send">Send</button>
    </form>
  </body>
</html>

<?php include('register.php'); ?>
<?php include('conversation.php'); ?>
  <script src="app.js"></script>
