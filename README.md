Radix Layouts
===
A set of 31 responsive layouts for Backdrop CMS.

![alt tag](https://raw.github.com/arshad/backdrop-layouts/master/screenshot.png)

## Features

* Responsive out of the box
* Works with any Backdrop theme.
* Easily extendable to support new layouts and new regions.

## How to override layouts

1. To override layouts in your theme, copy the layout template (*layout-NAME.tpl.php*) from the */layouts/radix-layouts* directory and place it in your theme templates directory.
2. Make your changes and save.
3. Clear the cache to see your changes.

## How to add new regions

Using *radix_burr* as an example:

1. Copy the layout directory (e.g. *radix_burr*) from */layouts/radix-layouts* and place it under */layout*.
2. Rename *radix_burr* with the name of your layout, *custom_layout*.
3. Rename *radix_burr.info* and *radix-burr.png* to *custom_layout.info* and *custom-layout.png* respectively.
4. Rename *layout--radix-burr.tpl.php* to *layout--layout-name.tpl.php*.
5. Edit *custom_layout.info* and add your region:

```
; Specify regions for this layout.
regions[header] = Header
regions[sidebar] = Sidebar
regions[custom_region] = Custom Region
regions[content] = Content
regions[footer] = Footer
```

6. Edit *layout-your-layout-name.tpl.php* and add your region as follows:

```
<?php if (!empty($content['custom_region'])): ?>
  <?php print $content['custom_region']; ?>
<?php endif; ?>
```

## Fluid layout

1. To make your layout fluid, follow the steps above to override the layout.
2. Remove the ```container``` class from main

## Radix Layouts for Drupal

http://drupal.org/project/radix_layouts

## License

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.

## Current Maintainers

* [Arshad Chummun](http://github.com/arshad)
