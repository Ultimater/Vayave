<h1>Creating Post</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="title">Title</label>
			<input type="text" id="title" name="title">
		</li>	
		<li>
			<label for="body">Body</label>
			<textarea id="body" name="body"></textarea>
		</li>
		<li>
			<input type="submit" value="create post" name="create_post">
		</li>
	</ul>
	<?php if(isset($status)) echo $status; ?>
</form>