</main>
<footer>
  <div class="bg"></div>
  <div class="content-width">
    <div class="content">
      <div class="left">

        <?php if ($field = get_field('logo_h', 'option')): ?>
          <div class="logo-wrap">
            <a href="<?= get_home_url() ?>">
              <?= wp_get_attachment_image($field['ID'], 'full', false) ?>
            </a>
          </div>
        <?php endif ?>

        <ul class="list-contact">

          <?php if ($field = get_field('email_f', 'option')): ?>
            <li>
              <a href="mailto:<?= $field ?>"><?= $field ?></a>
            </li>
          <?php endif ?>
          
          <?php if ($field = get_field('phone_f', 'option')): ?>
            <li>
              <a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>"><?= $field ?></a>
            </li>
          <?php endif ?>
          
          <?php if ($field = get_field('copyright_f', 'option')): ?>
            <li><?= $field ?></li>
          <?php endif ?>
          
        </ul>

        <?php if(have_rows('socials_f', 'option')): ?>

          <ul class="soc">

            <?php while(have_rows('socials_f', 'option')): the_row() ?>

              <?php if ($field = get_sub_field('icon')): ?>
                <li>
                  <a href="<?= get_sub_field('url') ?>" target="_blank">
                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                  </a>
                </li>
              <?php endif ?>

            <?php endwhile ?>

          </ul>

        <?php endif ?>

      </div>

      <div class="wrap-menu">

        <?php if(have_rows('column_2_f', 'option')): ?>

          <div class="item item-1">

            <?php while(have_rows('column_2_f', 'option')): the_row() ?>

              <?php if ($field = get_sub_field('title')): ?>
                <h3 class="title"><?= $field ?></h3>
              <?php endif ?>

              <?php if ($field = get_sub_field('text')): ?>
                <ul>
                  <li><?= $field ?></li>
                </ul>
              <?php endif ?>

            <?php endwhile ?>

          </div>

        <?php endif ?>

        <div class="item item-2">

          <?php if ($field = get_field('menu_title_f', 'option')): ?>
            <h3 class="title"><?= $field ?></h3>
          <?php endif ?>
          
          <?php wp_nav_menu( array(
            'theme_location'  => 'footer',
            'container'       => '',
            'items_wrap'      => '<ul>%3$s</ul>'
          )); ?>

        </div>

        <?php if (get_field('form_f', 'option')): ?>
          <div class="item item-3">

            <?php if ($field = get_field('form_f', 'option')['title']): ?>
              <h3 class="title"><?= $field ?></h3>
            <?php endif ?>
            
            <?php if ($field = get_field('form_f', 'option')['form']): ?>
              <div class="form-footer">
                <?= do_shortcode('[contact-form-7 id="' . $field . '"]') ?>
              </div>
            <?php endif ?>
            
          </div>
        <?php endif ?>
        
      </div>
    </div>
  </div>
</footer>

<?php if (is_page(22)): ?>
</div>
<?php endif ?>

<?php wp_footer(); ?>
</body>
</html>