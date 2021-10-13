<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;
$global_support		= get_field('opt_support', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_footer 		= get_field('opt_footer', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_footer	= get_field('override_footer') ? get_field('instance_footer')['opt_footer'] : false;
$override_support	= get_field('override_support') ? get_field('instance_support')['opt_support'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_footer	= $override_footer ?: $global_footer;
$page_support	= $override_support ?: $global_support;

// ----------------------------------------------------------------------
?>

<footer class="footer">
	<div class="footer-inner">
		<div class="uk-grid uk-grid-large uk-flex-between uk-flex-middle">


			<?php if($page_footer['show_contact'] && $global_contact) { ?>
				<div class="uk-width-1-2@m uk-width-auto@l">
					<div class="footer-item footer-contact">
						<?php include 'tpl/partials/contact.php'; ?>
					</div>
				</div>
			<?php } ?>


			<?php if($page_footer['footer_text']) { ?>
				<div class="uk-width-1-2@m uk-width-1-3@l">
					<div class="footer-item footer-text">
						<?= $global_footer['footer_text'] ?>
					</div>
				</div>
			<?php } ?>


			<div class="uk-width-auto@m uk-text-right@l">
				<?php if($page_footer['show_logo'] && $page_logos) { ?>
					<div class="footer-item footer-logo">
                        <!--
						<?php include_once 'tpl/partials/logo-function.php'; ?>
						<?php include 'tpl/partials/logo.php'; ?>
						-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="89.734" height="50.059" viewBox="0 0 89.734 50.059">
                            <g id="Gruppe_4" data-name="Gruppe 4" transform="translate(-31.266 -53)">
                                <g id="Gruppe_2" data-name="Gruppe 2" transform="translate(-592.427 -371.212)">
                                    <g id="Gruppe_1" data-name="Gruppe 1" transform="translate(678.55 424.212)">
                                        <path id="Pfad_1" data-name="Pfad 1" d="M1006.312,474.27H971.524V466l15.808-16.37a40.451,40.451,0,0,0,3.237-3.982,15.864,15.864,0,0,0,1.8-3.22,7.193,7.193,0,0,0,.559-2.559,6.536,6.536,0,0,0-1.254-4.406,4.577,4.577,0,0,0-3.626-1.423,6.31,6.31,0,0,0-3.444.949,7.458,7.458,0,0,0-2.163,2.7,7.088,7.088,0,0,0-.345,3.119H971.435c0-3.1-.038-5.61,1.465-8.174a16.255,16.255,0,0,1,6.112-6.134,18.537,18.537,0,0,1,9.337-2.288q8.338,0,12.591,3.813t4.253,10.727a15.771,15.771,0,0,1-1.424,6.66,28.465,28.465,0,0,1-4.1,6.3q-2.678,3.2-6.473,7.066l-5.66,5.66h18.776Z" transform="translate(-971.435 -424.212)" fill="#d4d7da"/>
                                    </g>
                                    <path id="Pfad_2" data-name="Pfad 2" d="M686.813,432.364a15.249,15.249,0,0,0-6.744-5.931,23.364,23.364,0,0,0-9.913-2,23.05,23.05,0,0,0-9.846,2,15.918,15.918,0,0,0-3.834,2.49,15.883,15.883,0,0,0-3.855-2.49,23.363,23.363,0,0,0-9.913-2,23.05,23.05,0,0,0-9.846,2,15.392,15.392,0,0,0-6.728,5.931,17.981,17.981,0,0,0-2.44,9.659v32.434h10.676V442.023a11.849,11.849,0,0,1,.966-5.169,6.169,6.169,0,0,1,2.83-2.915,10.074,10.074,0,0,1,4.542-.932,10.207,10.207,0,0,1,4.541.932,6.213,6.213,0,0,1,2.881,2.915,11.666,11.666,0,0,1,.983,5.169v32.434h10.706V442.023a11.849,11.849,0,0,1,.966-5.169,6.169,6.169,0,0,1,2.83-2.915,10.074,10.074,0,0,1,4.542-.932,10.207,10.207,0,0,1,4.541.932,6.213,6.213,0,0,1,2.881,2.915,11.666,11.666,0,0,1,.983,5.169v15.555l10.676-11.043v-4.513A18.075,18.075,0,0,0,686.813,432.364Z" transform="translate(0 -0.186)" fill="#d4d7da"/>
                                </g>
                            </g>
                        </svg>

                    </div>
				<?php } ?>
				<?php if($page_footer['show_socialmedia'] && $global_social) { ?>
					<div><div class="footer-item footer-social">
						<?php $social_profiles = $global_social;
						include 'tpl/partials/social.php'; ?>
					</div></div>
				<?php } ?>
			</div>

            <?php if(has_nav_menu('footer')) { ?>
            <div class="uk-width-auto@m">
                <div class="footer-item footer-menu">
                    <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'fallback_cb' => false)); ?>
                </div>
            </div>
            <?php } ?>


		</div>
	</div>
</footer>

<div class="modal micromodal-slide" id="dyn-modal" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="dyn-modal-title">
            <header class="modal__header">
                <p>
                    <strong class="modal__title" id="dyn-modal-title"></strong>
                    <span class="modal__title" id="dyn-modal-subtitle"></span>
                </p>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="dyn-modal-content">
            </main>
        </div>
    </div>
</div>

<?php
include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
