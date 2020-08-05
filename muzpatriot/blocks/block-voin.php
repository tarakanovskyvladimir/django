<li class="flex-container">
	<figure class="voin-foto text-center"><img src="<?php block_field('foto_voin'); ?>" alt="<?php block_field('fio'); ?>"><figcaption>Годы жизни: <?php block_field('live_year'); ?></figcaption></figure>
    <section class="fio-desk"><h3 class="font22"><?php block_field('fio'); ?></h3>
	<!-- <h4>Биография:</h4> -->
	<p><b>Дата рождения:</b> <?php block_field('date_born'); ?>
	<br><b>Место рождения:</b> <?php block_field('side_born'); ?>
	<br><b>Образование, партийность:</b> <?php block_field('education'); ?>
	<br><b>Дата призыва в РККА:</b> <?php block_field('date_rkka'); ?>
	<br><b>Место призыва в РККА:</b> <?php block_field('voenkomat'); ?>
	<br><b>Боевой путь:</b> <?php block_field('path_war'); ?>
	<br><b>Послевоенное время:</b> <?php block_field('after_war'); ?>
	<br><b>Дата смерти и место захоронения:</b> <?php block_field('date_death'); ?></p>
	Смотреть награды
	 <?php strlen(block_field('vict-germ')); ?></section>
</li>

