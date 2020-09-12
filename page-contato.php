<?php
// Template Name: Contato
?>
<?php get_header(); ?>
   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<a href="https://www.google.com.br/maps" target="_blank"><img src="img/rest-mapa.jpg" alt="Fachada do Rest"></a>
			</div>

			<div class="grid-1-3 contato-item">
				<h2>Dados</h2>
				<p>19 3722-1899</p>
				<p>contato@rest.com</p>
				<p>facebook.com/rest/</p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Horários</h2>
				<p>Segunda à Sexta: 10 às 23</p>
				<p>Sábado: 14 às 23</p>
				<p>Domingo: 14 às 22</p>
			</div>
			<div class="grid-1-3 contato-item">
				<h2>Endereço</h2>
				<p>Rua Marechal Deodoro, 1200</p>
				<p>Piracicaba - São Paulo</p>
				<p>Brasil - Terra - Via Láctea</p>
			</div>
		</section>

		<?php endwhile; else: endif; ?>


		<?php get_footer(); ?>