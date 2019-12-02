<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    header {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
   
  <header>

    <ul>
      <li>
        <strong>Name:</strong> <?= $task['title']; ?>
      </li>
      <li>
        <strong>Due Date:</strong> <?= $task['due']; ?>
      </li>
      <li>
        <strong>Personal responsible:</strong> <?= $task['assigned_to']; ?>
      </li>
      <li>
        <strong>Status:</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
      </li>
      
    </ul>
      

  </header>    
  
</body>
</html>