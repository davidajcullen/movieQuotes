<?php 

include("includes/connection.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Movie Quotes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="quoteList.php">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
      </div>
    </nav><br><br><br>

    <div class="container">
       <p><a class="btn btn-primary btn-lg" href="quoteRandom.php" role="button">Random Quotes &raquo;</a></p>
 
      <div id= "list">
        <h1>List of Quotes</h1>

        <?php
          //query to get sessions order by course_ide
          $getQuotes = "SELECT * FROM `quotes`";
          //run query
          $runQuotes = mysql_query($getQuotes);

          //while loop for result set
          while ($rowQuote = mysql_fetch_array($runQuotes)){
            //varaibles = row data
            $movieId = $rowQuote ['quote_id'];
            $movieTitle = $rowQuote ['film'];
            $movieQuote = $rowQuote ['quote'];
            $movieCharacter = $rowQuote ['character'];
            $movieActorActress = $rowQuote ['actor_actress'];
            $movieYear = $rowQuote ['year'];
            $dateCreated = $rowQuote ['created_at'];
          ?>

          </h1>
             <h1><strong>What film: </strong><a id='' href="quoteSingle.php?quote_id=<?php echo "$movieId";?>"><?php echo "$movieTitle";?></a></h1>
            <p><strong>What was the quote: </strong><?php echo "$movieQuote"; ?></p>
            <p><strong>Who was the character: </strong><?php echo "$movieCharacter"; ?></p>
            <p><strong>Who was the Actor/Actress: </strong><?php echo "$movieActorActress"; ?></p>
            <p><strong>What year was the move released: </strong><?php echo "$movieYear"; ?></p>
            <p><em>Quote added: <?php echo "$dateCreated"; ?></p></em>

         <?php } ?>

      </div>

      <a class="btn btn-primary btn-lg"href="download.php">Download List here</a>
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
