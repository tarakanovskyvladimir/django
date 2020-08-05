<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stavstroi26
 */

?>

	</div><!-- #content -->
</div><!-- #page -->
<p data-popbox-target="popzvon" class="modal-main-site site block-middle wp-caption-text text-uppercase">Заказать консультацию</p>
<footer id="colophon" class="site-footer color-white"><div class="site-info site-content block-middle">
	<ul class="flex-container">
		<li class="f-logo-desc"><?php the_custom_logo(); ?></li>
		<li class="f-menu"><?php wp_nav_menu( array('theme_location' => 'menu-1', 'menu_id' => 'footer-menu', 'menu_class' => 'flex-container footer-menu text-uppercase',) ); ?>
			<address><img src="<?php bloginfo("template_url"); ?>/img/placeholder-footer.svg" alt="" class="top-svg">г. Ставрополь, ул. Доваторцев, д. 183 В<a href="/kontakty/" class="text-uppercase">Посмотреть на карте</a></address>
			<div class="tel-footer"><img src="<?php bloginfo("template_url"); ?>/img/old-handphone.svg" alt="" class="top-svg"><a href="tel:+79624410800" class="color-white">8 962 441 08 00;</a> <a href="tel:+79283219882" class="color-white">8 928 321 98 82</a></div>
		</li>
	</ul>
</div></footer><!-- .site-info #colophon -->

<section data-popbox-id="popzvon" class="popbox" id="direktor-letter">
   <div class="popbox_container"><h3>Оставьте заявку, и менеджер свяжется с Вами в ближайшее время!</h3>
    <?php echo do_shortcode( '[contact-form-7 id="839" title="Контактная форма 1"]' ); ?><button data-popbox-close="popzvon">Закрыть</button>
   </div>
 </section>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(39254670, "init", {
        id:39254670,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39254670" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">var popbox = new Popbox({ overlay:true, });</script>
</body>
</html>