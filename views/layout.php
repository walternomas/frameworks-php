<!DOCTYPE html>
<html lang="es">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mi sitio web</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
            <div class="container">
		<a href="/" class="navbar-brand h1">FB</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                </ul>
            </div>
	</nav>

        <div class="container">
	    <div class="row">
                <?= $content;?>
            </div>
        </div>
    </body>
</html>
