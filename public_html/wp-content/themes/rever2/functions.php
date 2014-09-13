<?php

// Set Theme Name & Short Name
$themeName = 'Rêver Responsive';
$shortName = 'rever';

// Set path to theme libraries
$includesPath = TEMPLATEPATH . '/library/';
$assetUrl = get_template_directory_uri() . '/library/assets/';

// Require Theme Utilities
require_once $includesPath . 'utilities/admin-dependencies.php';
require_once $includesPath . 'utilities/utilities.php';
require_once $includesPath . 'utilities/support.php';
require_once $includesPath . 'utilities/helpers.php';

// Require Custom Post Types
require_once $includesPath . 'post-types/PostTypes.php';

// Require Custom Widgets
require_once $includesPath . 'widgets/widgets.php';

// Require Theme Options Panel
require_once $includesPath . 'utilities/admin-options.php';

// Require Theme Menus
require_once $includesPath . 'utilities/menus.php';

// Require Breadcrumbs
require_once $includesPath . 'utilities/breadcrumbs.php';