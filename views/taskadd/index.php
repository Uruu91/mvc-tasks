<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaskAdd</title>
</head>

<body>
  <?php
  require_once "./views/partials/header.php";
  ?>
  <h1>Task Add</h1>

  <form action="<?php echo constant("URL") ?>taskadd/createNote" class="flex flex-col gap-4 w-80" method="POST">
    <input type="text" name="taskTitle" id="taskTitle">
    <textarea name="taskDescription" id="taskDescription" cols="30" rows="10"></textarea>
    <button class="py-2 px-4 border border-black rounded-md font-bold text-red-900 w-fit mx-auto hover:bg-black hover:border-red-500 hover:text-indigo-500">Enviar</button>
  </form>
  <?php
  require_once "./views/partials/footer.php";
  ?>
</body>

</html>