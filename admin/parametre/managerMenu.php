<?php
	include '../lib/init.php';

	/**
	 * Initialisation
	 */
	use Lib\Tool;
    use Lib\Menu;

	Tool::ifConnect(BASEADMIN);
?>
<!doctype html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1;">
	<title><?= TITLEBACK ?></title>
	<link rel="icon" type="image/png" href="<?= BASEADMIN ?>img/layout/favicon.png">
    <link href="<?= BASEFRONT ?>js/scroll/scroll.css" rel="stylesheet" type="text/css">
	<link href="<?= BASEADMIN ?>css/app.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
		<script src="<?= BASEFRONT ?>js/html5.js"></script>
	<![endif]-->
</head>

<body>

	<main id="main">

		<?php
			include '../include/menu.php';
		?>

		<div id="container">

			<?php
				include '../include/header.php';
			?>

			<div id="contentTitre">
				<h1>Gestion des menus</h1>
			</div>

			<div id="content">

				<?= Tool::getFlash() ?>

                <div id="sortable">
                    <?php
                        Menu::getMenuAdmin(3, null, $bdd);
                    ?>
                </div>

			</div>

		</div>

	</main>

	<script type="text/javascript" src="<?= BASEFRONT ?>js/jquery/jquery.js"></script>
	<script type="text/javascript" src="<?= BASEFRONT ?>js/jquery/jquery-ui.js"></script>
    <script type="text/javascript" src="<?= BASEFRONT ?>js/scroll/scroll.js"></script>
    <script type="text/javascript" src="<?= BASEFRONT ?>js/sortable.js"></script>
	<script type="text/javascript" src="<?= BASEADMIN ?>js/app.js"></script>	
	
</body>
</html>