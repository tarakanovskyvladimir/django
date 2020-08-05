<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ikstav
 */

?>

	</div><!-- #content -->
</div><!-- #page -->
<footer id="colophon" class="site-footer"><section class="site block-middle flex-container">
	<div class="logo-footer"><figure>
		<img src="/wp-content/themes/ikstav/img/logo-footer.png" alt="купить кирпич ставрополь">
		<figcaption>продажа кирпича в ставрополе</figcaption>
	</figure></div>
	<div class="footer-address">
		<?php wp_nav_menu( array('theme_location' => 'menu-1', 'menu_id' => 'footer-menu',) ); ?>
		<address><p><img src="/wp-content/themes/ikstav/img/address-phone.png" class="address-img" alt="">+7 962 446 29 29</p>
		<p><img src="/wp-content/themes/ikstav/img/i-location.png" class="address-img" alt="">Ставрополь, ул. Доваторцев 183В</p></address>
	</div>
</section></footer><!-- #colophon -->
<section data-popbox-id="popobrzvon" class="popbox" id="direktor-letter">
   <div class="popbox_container"><h3>Оставьте заявку, и менеджер свяжется с Вами в ближайшее время!</h3>
    <?php echo do_shortcode( '[contact-form-7 id="558" title="Форма"]' ); ?><button data-popbox-close="popobrzvon">Закрыть</button>
   </div>
 </section>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48980063 = new Ya.Metrika({
                    id:48980063,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48980063" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">var popbox = new Popbox({ overlay:true, });</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'AvmunuqtR2';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
