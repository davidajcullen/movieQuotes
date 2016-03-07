<?php include("includes/connection.php");

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


    $file = "quoteList.txt";

    if(!file_exists($file)) die("I'm sorry, the file doesn't seem to exist.");

    $type = filetype($file);
    // Get a date and timestamp
    $myfile = fopen("quoteList.txt", "a") or die("Unable to open file!");
    fwrite($myfile, "\n".$movieTitle .$movieQuote .$movieCharacter .$movieActorActress .$movieYear);
    fclose($myfile);    // Send file headers
    header("Content-type: $type");
    header("Content-Disposition: attachment;filename=quoteList.txt");
    header("Content-Transfer-Encoding: binary"); 
    header('Pragma: no-cache'); 
    header('Expires: 0');
    // Send the file contents.
    set_time_limit(0); 
    readfile($file);
} ?>

