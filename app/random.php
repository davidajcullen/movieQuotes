<?php include("includes/connection.php");
		//gets the check point session_id and button from the URL
		$currentQuoteId = $_GET['quote_id'];

		$ranQuoteQuery = "SELECT * FROM `quotes` WHERE quote_id != '$currentQuoteId' ORDER BY RAND() LIMIT 1" ;
		$getRanQuoteQuery = mysql_query($ranQuoteQuery);
		$ranQuote = mysql_fetch_assoc($getRanQuoteQuery);

header("location:quoteRandom.php");

?>