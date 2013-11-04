<html>
<head>
	<title>Cootic Blog</title>
</head>

<body>
	<h1>Cootic Blog</h1>
	<?php
	foreach($posts as $post) : ?>		
		<article>
			<h3><?php echo $post['title'] ?></h3>
			<div class="body">
				<?php echo $post['body'] ?>
			</div>
		</article>		
	<?php endforeach ?>
</body>

</html>
