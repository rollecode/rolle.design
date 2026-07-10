<?php
/**
 * The template for displaying front page
 *
 * Contains the closing of the site wrapper div and all content after.
 * Initial styles for front page template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by: Rolle Laukkarinen
 * @Last Modified time: 2021-04-02 00:36:47
 * @package rolle
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

namespace Air_Light;

get_header(); ?>
<main class="site-main transition-fade">
  <section class="block block-hero block-hero-front block-has-space" id="hero">
    <div class="content">
      <h1 id="content"><span>$</span> <span>sudo su</span> <span>rolle.</span></h1>
      <p>Hello! I'm <span>Rolle</span>, nice to meet you! I'm a programmer, developer, designer, sysadmin from Finland.</p>

      <img src="https://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( 'rolle@dude.fi' ) ) ); ?>.jpg?s=300" alt="Facial image of me, Rolle Laukkarinen aka rolle from Twitter" class="gravatar" width="100" height="100" />
      <p class="gravatar-description">Yep, that's my current gravatar. More recent photos at <a class="instagram-link" href="https://www.instagram.com/rolle_/" aria-label="Instagram"><?php include get_theme_file_path( '/svg/instagram.svg' ); ?> Instagram</a>.
        <span class="arrow"><?php include get_theme_file_path( '/svg/arrow-drawing.svg' ); ?></span>
      </p>
    </div>
  </section>

  <secton class="block block-doing-stuff block-has-space">
    <div class="head">
      <p>I like to do things like</p>
      <h2><span>Design,</span> <span>code,</span> <span>servers,</span> <span>articles.</span></h2>
    </div>
  </secton>
</main>

<?php get_footer();
