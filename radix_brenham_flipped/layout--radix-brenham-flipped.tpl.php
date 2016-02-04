<?php
/**
 * @file
 * Template for Radix Brenham Flipped.
 */
?>
<div class="<?php print implode(' ', $classes); ?> layout--brenham-flipped"<?php print backdrop_attributes($attributes); ?>>
  <?php if (!empty($content['header'])): ?>
    <header class="layout__header" role="header">
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>

  <?php if (!empty($content['top'])): ?>
    <div class="layout__top">
      <div class="container">
        <?php print $content['top']; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($messages): ?>
    <section class="layout__messages">
      <div class="container">
        <?php print $messages; ?>
      </div>
    </section>
  <?php endif; ?>

  <div class="layout__title">
    <div class="container">
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <div class="page-header">
          <h1><?php print $title; ?></h1>
        </div>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>
  </div>

  <?php if ($tabs): ?>
    <div class="layout__tabs">
      <div class="container">
        <?php print $tabs; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($action_links): ?>
    <div class="layout__action-links">
      <div class="container">
        <?php print $action_links; ?>
      </div>
    </div>
  <?php endif; ?>

  <main class="layout__main" role="main">

    <div class="container">
      <div class="row">
        <div class="layout__content col-md-9">
          <?php print $content['content']; ?>
        </div>
        <div class="layout__sidebar col-md-3">
          <?php print $content['sidebar']; ?>
        </div>
      </div>
    </div>
  </main>

  <?php if ($content['footer']): ?>
    <footer class="layout__footer" role="footer">
      <div class="container">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div>
