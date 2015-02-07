<?php
/**
 * @file
 * Template for Radix Bartlett Flipped.
 */
?>
<div class="radix-bartlett-flipped <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php if (!empty($content['header'])): ?>
    <?php print $content['header']; ?>
  <?php endif; ?>

  <?php if ($messages): ?>
    <section class="messages container">
      <?php print $messages; ?>
    </section>
  <?php endif; ?>

  <main class="main container" role="main">
    <div class="page-header">
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </div>

    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print $tabs; ?>
      </div>
    <?php endif; ?>

    <?php print $action_links; ?>
    <div class="row">
      <div class="col-md-8 panel-panel">
        <div class="row">
          <div class="col-md-12 radix-layouts-contentheader">
            <?php print $content['contentheader']; ?>
          </div>
          <div class="col-md-6 radix-layouts-contentcolumn1">
            <?php print $content['contentcolumn1']; ?>
          </div>
          <div class="col-md-6 radix-layouts-contentcolumn2">
            <?php print $content['contentcolumn2']; ?>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <aside class="col-md-4 radix-layouts-sidebar panel-panel">
        <?php print $content['sidebar']; ?>
      </aside>
    </div>
  </main>

  <?php if ($content['footer']): ?>
    <footer id="footer" class="footer" role="footer">
      <div class="container">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div><!-- /.bartlett-flipped -->
