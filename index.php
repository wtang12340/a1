<?php 

$quotes = 
[
    'You can do anything, but not everything. —David Allen',
    'You miss 100 percent of the shots you never take. —Wayne Gretzky',
    'Even if you’re on the right track, you’ll get run over if you just sit there. —Will Roger',
    'A wise man gets more use from his enemies than a fool from his friends. —Baltasar Gracian',
    'The real voyage of discovery consists not in seeking new lands but seeing with new eyes. —Marcel Proust',
]

?>


<!DOCTYPE html>
<html>
<head>
	<title>William Tang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/william.css">
</head>
<body>
	<div class="container">
		<h1>William Tang</h1>
		<img src='images/william.jpg' alt='William Tang'>
		<h2>About Me</h2>
		<p>
        My name is William Tang and I work as a web developer. I grew up in Boston and has been interested in computer science
        since high school. I graduated from Boston University 2 years ago with a Computer Science degree and has been getting experience in the field.
        I want to further improve my skills in web development by filling the holes in my knowledge
        by earning a Masters degree at Harvard Extension. Nice to meet everyone. 
		</p>
		<h2>Random Quote</h2>
		<blockquote>
        <?php 
         echo $quotes[array_rand($quotes,1)];
        ?>
		</blockquote>
	</div>
</body>
</html>