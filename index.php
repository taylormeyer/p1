<!DOCTYPE html>
<html>
<head>
	<title>Taylor Meyer</title>
	<meta charset="utf-8">

	<meta name = viewport" content="width=device-width, initial-scale=1">

	<link href="/css/style.css" rel="stylesheet" />
	
	
</head>
<body>
	<div class="container">
		<h1>Taylor Meyer</h1>
		<img src='/images/taylor.png'>
		<h2>Introduction</h2>
		<p>
		Thanks for visiting my page! I was born in Detroit, MI but raised in Raleigh, NC. I went to undergrad at UNC-Chapel Hill and played on the varsity tennis team (if anyone is looking to place some tennis, let me know!). I just finished my MBA at Kenan-Flagler Business School at UNC, and am now anxious to learn more about programming. I am currently working at Hyperspace Ventures where I focus on managing a small development team.
		</p>

		<h2>Quote of the Day</h2>
		<?php
		 $quotes = array(
		 			'Anything is possible if you set your mind to it - Mom ',
		 			'Anything worth doing is worth doing well - Dad',
		 			'Wyoming is the best state - Grandpa (from Wyoming)'
		 			);
		 ?>
		<blockquote><?php echo $quotes[array_rand($quotes)]; ?></blockquote>
	</div>

	<script type="text/javascript"></script>
</body>
</html>