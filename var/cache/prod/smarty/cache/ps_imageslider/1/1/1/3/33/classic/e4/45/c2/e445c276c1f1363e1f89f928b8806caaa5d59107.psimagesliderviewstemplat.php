<?php
/* Smarty version 3.1.48, created on 2024-07-11 16:13:40
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669004b43634c7_95932770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1720434638,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_669004b43634c7_95932770 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="2000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/prestashop/en/10-luxe">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/6a95e3560dca0feeb0131db8b00a7f27c1109163_Rectangle 87CARROSSEL LUXE.png" alt="sample-1" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Une Symphonie d&#039;Élégance et de Raffinement</h2>
                  <div class="caption-description"><p>Le luxe représente l'élégance et le raffinement ultime, offrant des produits et services d'exception qui se distinguent par leur qualité supérieure</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/en/11-outils-informatiques">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/8274f2dbac652aaa0fdb3efb46644016d1c89ae3_CARROSSEL INFORMATIQUE.png" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Essentiels pour l&#039;Efficacité Moderne</h2>
                  <div class="caption-description"><p>Les outils informatiques englobent une variété de logiciels et de matériels conçus pour améliorer l'efficacité, la productivité et la créativité. </p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/en/12-materiaux-de-construction">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/ffa42280db2e896e4798403d30fe16e62b973098_CARROSSSEL CONSTRUCTION.png" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Fondations de l&#039;Architecture Moderne</h2>
                  <div class="caption-description"><p>Les matériaux de construction sont les éléments essentiels qui forment la base de toute structure bâtie, qu'il s'agisse de maisons résidentielles</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
