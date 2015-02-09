<?php
/**
 * @file
 * Template for Radix Bartlett.
 */
?>
<div class="radix-bartlett <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <?php if (!empty($content['header'])): ?>
    <header id="header" class="header" role="header">
      <div class="container">
        <?php print $content['header']; ?>
      </div>
    </header>
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
    <div class="container-fluid">
      <div class="row">
        <!-- Sidebar -->
        <aside class="col-md-4 radix-layouts-sidebar">
          <?php print $content['sidebar']; ?>
        </aside>

        <div class="col-md-8">
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
      </div>
    </div>
  </main>

  <?php if ($content['footer']): ?>
    <footer id="footer" class="footer" role="footer">
      <div class="container">
        <?php print $content['footer']; ?>
      </div>
    </footer>
  <?php endif; ?>
</div><!-- /.radix-bartlett -->
