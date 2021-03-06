<?php

/**
 * seo_serp_preview extension for Contao Open Source CMS
 *
 * Copyright (C) 2016 derhaeuptling
 *
 * @author  derhaeuptling <https://derhaeuptling.com>
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */

/**
 * Register the namespace
 */
ClassLoader::addNamespace('Derhaeuptling\SeoSerpPreview');

/**
 * Register the classes
 */
ClassLoader::addClasses([
    'Derhaeuptling\SeoSerpPreview\PreviewWidget'          => 'system/modules/seo_serp_preview/src/PreviewWidget.php',
    'Derhaeuptling\SeoSerpPreview\TestsModule'            => 'system/modules/seo_serp_preview/src/TestsModule.php',
    'Derhaeuptling\SeoSerpPreview\Engine\EngineInterface' => 'system/modules/seo_serp_preview/src/Engine/EngineInterface.php',
    'Derhaeuptling\SeoSerpPreview\Engine\EventsEngine'    => 'system/modules/seo_serp_preview/src/Engine/EventsEngine.php',
    'Derhaeuptling\SeoSerpPreview\Engine\NewsEngine'      => 'system/modules/seo_serp_preview/src/Engine/NewsEngine.php',
    'Derhaeuptling\SeoSerpPreview\Engine\PageEngine'      => 'system/modules/seo_serp_preview/src/Engine/PageEngine.php',
]);

/**
 * Register the templates
 */
TemplateLoader::addFiles([
    'be_seo_serp_preview'       => 'system/modules/seo_serp_preview/templates/backend',
    'be_seo_serp_preview_tests' => 'system/modules/seo_serp_preview/templates/backend',
]);
