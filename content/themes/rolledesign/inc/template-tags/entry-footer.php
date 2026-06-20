<?php
/**
 *  Show categories, tags, comment and edit links after post.
 *
 * @package rolle
 */

namespace Air_Light;

function entry_footer() { ?>
<div class="entry-footer">
  <p class="date-single">
    <time datetime="<?php echo esc_html( get_the_time( 'c', get_the_ID() ) ); ?>"><?php echo esc_html( get_the_time( 'F', get_the_ID() ) ); ?> <?php echo esc_html( get_the_time( 'd', get_the_ID() ) ); ?>, <?php echo esc_html( get_the_time( 'Y', get_the_ID() ) ); ?></time>
  </p>

  <p class="auth">
    <a href="https://keybase.io/ronilaukkarinen"><img src="https://www.gravatar.com/avatar/<?php echo md5( strtolower( trim( 'roni@dude.fi' ) ) ); ?>.jpg?s=78" alt="Facial image of me, Rolle Laukkarinen aka rolle from Twitter" class="gravatar-small" width="26" height="26" /> @rolle</a>
  </p>
</div>
<?php }
