<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oknalux26
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer"><div class="site-info site block-middle flex-container">
		<?php wp_nav_menu( array('theme_location' => 'menu-1', 'menu_id' => 'footer-menu', )); ?>
		<div class="footer-item">
			<h3 class="footer-h3"><span>Режим работы</span></h3>
			<p class="time-work">c 8:00 до 19:00<br>без перерыва<br>без выходных</p>
			<a href="" class="branding-link"><img src="<?php bloginfo("template_url"); ?>/img/calc.png" class="img-vertical-middle">Калькулятор</a>
			<p class="branding-link" data-popbox-target="popzvon"><img src="<?php bloginfo("template_url"); ?>/img/return_zamer.png" class="img-vertical-middle">Вызвать замерщика</p>
		</div>
		<div class="footer-item">
			<h3 class="footer-h3"><span>Контакты</span></h3>
			<address>г. Ставрополь, ул. Доваторцев 183В</address>
			<p class="zakaz">Оформить заказ</p>
		</div>
	</div></footer><!-- #colophon -->
</div><!-- #page -->
<section data-popbox-id="popzvon" class="popbox" id="direktor-letter">
   <div class="popbox_container"><h3>Оставьте заявку, и менеджер свяжется с Вами в ближайшее время!</h3>
    <?php echo do_shortcode( '[contact-form-7 id="455" title="заказ специалиста"]' ); ?><button data-popbox-close="popzvon">Закрыть</button>
   </div>
 </section>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(36292985, "init", {
        id:36292985,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36292985" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">var popbox = new Popbox({ overlay:true, });</script>
</body>
</html>
