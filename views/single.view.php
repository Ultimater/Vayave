	<h1>Cootic Blog</h1>
	<?php
	foreach($content as $row) : ?>	
		
		<article>
		<h3>
			<?php echo $row['title'] ?>			
		</h3>
			<div class="body">
				<?php echo $row['body'] ?>
			</div>
		</article>		
	<?php endforeach ?>

	<a href="/Vayave">Back</a>
