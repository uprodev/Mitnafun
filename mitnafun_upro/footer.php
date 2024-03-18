</main>

<footer>
  <div class="content-width">
    <div class="content">
      <div class="item item-1">
        <ul>

          <?php if ($field = get_field('address_f', 'option')): ?>
            <li>
              <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-f1.svg" alt="">
              <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
            </li>
          <?php endif ?>

          <?php if ($field = get_field('phone_f', 'option')): ?>
            <li>
              <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-f2.svg" alt="">
              <a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>"><?= $field ?></a>
            </li>
          <?php endif ?>

          <?php if ($field = get_field('email_f', 'option')): ?>
            <li>
              <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-f3.svg" alt="">
              <a href="mailto:<?= $field ?>"><?= $field ?></a>
            </li>
          <?php endif ?>

        </ul>
      </div>
      <div class="item item-2">

        <?php if(have_rows('socials_f', 'option')): ?>

          <ul>

            <?php while(have_rows('socials_f', 'option')): the_row() ?>

              <?php if (get_sub_field('icon') || get_sub_field('link')): ?>

              <li>

                <?php if ($field = get_sub_field('icon')): ?>
                  <?= wp_get_attachment_image($field['ID'], 'full') ?>
                <?php endif ?>

                <?php if ($field = get_sub_field('link')): ?>
                  <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
                <?php endif ?>

              </li>
            <?php endif ?>

          <?php endwhile ?>

        </ul>

      <?php endif ?>

    </div>
    <div class="item item-3">

      <?php wp_nav_menu( array(
        'theme_location'  => 'footer',
        'container'       => '',
        'items_wrap'      => '<ul>%3$s</ul>'
      )); ?>

    </div>
    <div class="item item-4">

      <?php if(have_rows('schedule_f', 'option')): ?>

        <ul>

          <?php while(have_rows('schedule_f', 'option')): the_row() ?>

            <?php if ($field = get_sub_field('text')): ?>
              <li>
                <p><?= $field ?></p>
              </li>
            <?php endif ?>

          <?php endwhile ?>

        </ul>

      <?php endif ?>

    </div>
  </div>

  <?php if ($field = get_field('copyright_f', 'option')): ?>
    <div class="bottom">
      <p><?= $field ?></p>
    </div>
  <?php endif ?>

</div>
</footer>

<div id="default-popup " style="display:none;">
  <div class="popup-main">
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>