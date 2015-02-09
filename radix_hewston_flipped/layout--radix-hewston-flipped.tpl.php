<?php
/**
 * @file
 * Template for Radix Hewston Flipped.
 */
?>
<div class="radix-hewston-flipped <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
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

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 radix-layouts-slidergutter panel-panel">
          <?php print $content['slidergutter']; ?>
        </div>
        <div class="col-md-8 radix-layouts-slider panel-panel">
          <?php print $content['slider']; ?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 radix-layouts-column1 panel-panel">
          <?php print $content['column1']; ?>
        </div>
        <div class="col-md-4 radix-layouts-column2 panel-panel">
          <?php print $content['column2']; ?>
        </div>
        <div class="col-md-4 radix-layouts-column3 panel-panel">
          <?php print $content['column3']; ?>
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
</div><!-- /.radix-hewston-flipped -->
