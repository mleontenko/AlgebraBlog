<!DOCTYPE html>
<html lang="hr">
    <head>
		<meta charset="utf-8">
		<title>AlgebraBlog</title>
    </head>
    <body>
		<form method="post" action="">
			{{ csrf_field() }}
			Naslov:<br />
			<input type="text" name="title" />
			<br />
			
			Sadržaj:<br />
			<textarea name="content"></textarea>
			<br />
			
			<input type="submit" value="Spremi" />
		</form>
    </body>
</html>