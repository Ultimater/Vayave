<h1>Cootic Blog</h1>
	<?php
	foreach($posts as $post) : ?>	
		<?php echo "hello" ?>	
		<article>
			<h3><a href="single.php"><?php echo $post['title'] ?></a></h3>
			<div class="body">
				<?php echo $post['body'] ?>
			</div>
		</article>		
	<?php endforeach ?>
