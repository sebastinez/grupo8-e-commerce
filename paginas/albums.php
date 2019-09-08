<?php
include("./includes/breadcrumb.php");
include("./script/leerSpotify.php");
$albumes = getSpotify("./data/" . $_GET["g"] . ".json");
?>


<div class="container pt-5">
	<div class="container-albums">
		<?php foreach ($albumes as $album) : ?>
			<div class="contenedor-card-album animated fadeIn faster">
				<a href="?p=album&id=<?= $album["general"]["id"] ?>">
					<div class="card-img">
						<img src="<?= $album["general"]["imagen"] ?>">
					</div>
					<div class="info">
						<a href="#" class="name_artist"><?= $album["artista"]["nombre"] ?></a>
						<p class="name_disc"><?= $album["general"]["nombre"] ?></p>
						<p class="anio"><?php echo date_format(date_create($album["general"]["estreno"]), "Y"); ?></p>
						<span class="precio"><?= $album["general"]["precio"] ?> ARS</span>
						<span><span class="btn btn-naranja">comprar</span></span>
					</div>
				</a>
			</div>
		<?php endforeach; ?>
	</div>
</div>