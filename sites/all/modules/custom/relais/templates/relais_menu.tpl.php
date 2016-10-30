<div id="mobile_wrap">
  <span>Relais Berthet</span>
  <div id="mobile_nav_wrap">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<nav id="primary_nav_wrap">
  <?php if (isset($menu_items) && !empty($menu_items)): ?>
    <ul>
      <?php foreach ($menu_items as $key => $item): ?>
        <?php if (is_int($key)): ?>
        <li class="main-menu-head">
          <div class='title'>
              <?php if ($item['#title'] == 'Nous contacter'): ?>
                <a href="<?php print drupal_get_path_alias(base_path() . $item['#href']); ?>">
                  <?php print $item['#title']; ?>
                </a>
              <?php else: ?>
                <?php print $item['#title']; ?>
              <?php endif; ?>
          </div>
          <ul>
            <?php if ($item['#title'] == 'Nous contacter'): ?>
              <li class="contact-us">
                 <p>
                   <br>
                   37 Av Lamartine<br>
                   78170 La Celle Saint-Cloud<br>
                   <hr>
                   Ouvert 7j/7*<br>
                   Sans interruptions<br>
                   Service Continu<br>
                   <hr>
                   Près du Marché étang sec<br>
                   Tel: 01.39.69.31.64
                   <br><br>
                 </p> 
              </li>
            <?php endif; ?>
          <?php foreach ($item['#below'] as $sub_key => $sub_item): ?>
            <?php if (is_int($sub_key)): ?>
              <li>
                <a href="<?php print drupal_get_path_alias(base_path() .  $sub_item['#href']); ?>">
                  <?php print $sub_item['#title']; ?>
                </a>
              </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</nav>
