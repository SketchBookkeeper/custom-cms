<ul>
<?php foreach ($users as $user) { ?>
	<li><?= $user->name; ?></li>
<?php } ?>
</ul>

<h1>Submit your name</h1>

<form method="POST" action="/users ">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>
