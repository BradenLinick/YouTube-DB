<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>

  <style>
    body {
      width: 100vw;
      height: 100vh;
      margin: 0;
      font-family: helvetica;
    }
  
    nav {
      margin-bottom: 1rem;
      background-color: darkred;
    }
    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .nav form {
      padding-left: 2rem;
    }
    .nav form input {
      margin-right: .5rem;
    }
    .game {
      display: flex;
      flex-flow: row wrap;
      justify-content: center;
    }

    .info {
      border: 1px solid black;
      padding: 1rem;
      margin: 1rem;
    }

    .form label {
      margin-left: 1rem;
    }
    .form input {
      margin-left: 1rem;
    }
    .form textarea {
      margin-left: 1rem;
    }
    h1 {
      color: white;
      padding-right: 2rem;
    }

    footer {
      background-color: darkred;
      padding: 1rem;
      text-align: center;
      margin-top: 1rem;
      color: white;
    }
    .la {
      display: flex;
    }
    .la form{
      margin: .5rem;
    }
    .la a {
      text-decoration: none;
      border: 1px solid black;
      border-radius: 5rem;
      padding: .4rem;
      color: darkblue;
    }
  </style>
    <nav>
    <div class="nav">
      <form action="" method="get">
        <label for="search">Search </label><input type="text" name="search" for="search" autocomplete="off"><input type="submit">
      </form>
      <h1>MeTube</h1>
    </div>
    </nav>

    <?= $content ?>

    <footer>
      <p>MeTubeStudios created by a couple of OGs</p>
    </footer>
   
    <script src=""></script>
  </body>
</html>