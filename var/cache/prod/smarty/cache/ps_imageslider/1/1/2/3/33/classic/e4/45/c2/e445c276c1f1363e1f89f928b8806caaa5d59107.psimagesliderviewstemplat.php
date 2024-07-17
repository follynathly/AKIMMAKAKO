<?php
/* Smarty version 3.1.48, created on 2024-07-15 17:15:36
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669559380ce299_01016260',
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
function content_669559380ce299_01016260 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="2000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Carousel container">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/prestashop/fr/10-luxe">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/49c1258d656365a49d1d2ca4d32efabd297bbce5_LUXE.png" alt="sample-1" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">SYMPHONY OF ELEGANCE AND REFINEMENT</h2>
                  <div class="caption-description"><h3>Excluxury represents the ultimate elegance and refinement, offering exceptional products and services that stand out for their superior </h3>
<p></p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/11-outils-informatiques">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/843232a6d05790f0336216b64503fd12d2eadeee_INFORMATIQUE.png" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">IT Tools: Essential for Modern Efficiency</h2>
                  <div class="caption-description"><p>Computer tools encompass a variety of software and hardware designed to improve efficiency, productivity, and creativity</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/prestashop/fr/12-materiaux-de-construction">
            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/1cad3f442582b65e02a77a864b81bf8f8b6e03ea_CONSTRUCTION.png" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Building Materials: Foundations of Modern Architecture</h2>
                  <div class="caption-description"><p>Building materials are the essential elements that form the basis of any built structure, whether they are residential homes, commercial skyscrapers, or public infrastructure</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Carousel buttons">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Previous">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
