<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stroi26ka
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer"><div class="site-content block-middle">
		<ul class="flex-container footer-items">
			<li class="text-uppercase wp-caption-text"><?php the_custom_logo(); ?><br>Всё для<br>строительства<br>и ремонта</li>
			<li class="footer-menu text-uppercase"><ul>
				<li><a href="http://wptest/">Главная</a></li>
				<li><a href="http://wptest/o-nas/">О нас</a></li>
				<li><a href="http://wptest/novosti/">Новости</a></li>
				<li><a href="http://wptest/kontakty/">Контакты</a></li>
				<li><a href="http://wptest/otzyvy/">Отзывы</a></li></ul></li>
			<li class="footer-menu text-uppercase"><ul>
				<li><a href="http://wptest/">Бетон, раствор</a></li>
				<li><a href="http://wptest/o-nas/">Инертные материалы</a></li>
				<li><a href="http://wptest/novosti/">Кирпич</a></li>
				<li><a href="http://wptest/kontakty/">Мраморная крошка</a></li>
				<li><a href="http://wptest/otzyvy/">Тротуарная плитка</a></li>
				<li><a href="http://wptest/otzyvy/">Транспортные услуги</a></li></ul></li>
			<li class="foot_address_tel"><a href="+79624410880"><img src="" alt="">8 (962) 44 10 880</a><a href="+79283218630">8 (962) 321 86 30</a><br><address><img src="" alt="">г. Ставрополь, ул. Доваторцев 183В</address></li>
			<li><p class="text-uppercase wp-caption-text block-middle footer-action">Сделать заказ</p></li>
		</ul>
		
	</div></footer><!-- #colophon -->
</div><!-- #page -->
<section data-popbox-id="popzvon" class="popbox" id="direktor-letter">
   <div class="popbox_container"><h3>Оставьте заявку, и менеджер свяжется с Вами в ближайшее время!</h3>
       <?php echo do_shortcode('[contact-form-7 id="504" title="оформление заказа"]'); ?>
     <button data-popbox-close="popzvon">Закрыть</button>
   </div>
 </section>
		<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46055604 = new Ya.Metrika({
                    id:46055604,
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
<noscript><div><img src="https://mc.yandex.ru/watch/46055604" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php wp_footer(); ?>
<!-- BEGIN JIVOSITE CODE {literal} -->
<!--<script type='text/javascript'>
(function(){ var widget_id = 'aa83HmY7UG';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>-->
<!-- {/literal} END JIVOSITE CODE -->
<!--<script type='text/javascript'>  jQuery("#to_jiv").click(function(event) {
  	jivo_api.open({start: 'call'});
  });</script>-->
<script type="text/javascript">var popbox = new Popbox({ overlay:true, });</script>
</body>
</html>
