<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-100'); ?>>

    <header class="sticky top-5 z-50 mx-5 md:mx-10 rounded-full bg-white/60 backdrop-blur-md border border-white/30 shadow">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between">

            <!-- LOGO -->
            <div class="flex items-center gap-3">

                <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
                <?php endif; ?>

                <span class="text-lg font-semibold text-gray-800">
                    <?php bloginfo('name'); ?>
                </span>

            </div>

            <!-- DESKTOP MENU -->
            <nav class="hidden md:flex items-center gap-6">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'desktop-menu flex gap-6 font-medium',
                    'fallback_cb' => false,
                ]);
            ?>
                <a href="#"
                    class="ml-4 inline-flex items-center px-4 py-2 rounded-full bg-linear-to-r from-primary to-blue-700 text-white text-sm">
                    Download
                </a>
            </nav>

            <!-- HAMBURGER -->
            <div class="relative md:hidden">
                <button id="menu-toggle"
                    class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:bg-gray-100">
                    <!-- ICON OPEN -->
                    <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <!-- ICON CLOSE -->
                    <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- MOBILE OFF CANVAS -->
                <div id="mobile-menu" class="hidden absolute right-0 mt-7 w-72 bg-white shadow rounded-lg">
                    <nav class="px-5 py-4 flex flex-col gap-3">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'mobile-menu flex flex-col gap-3 font-medium',
                            'fallback_cb'    => false,
                        ]);
                        ?>
                        <a href="#"
                            class="mt-2 inline-flex justify-center px-4 py-2 rounded-md bg-linear-to-r from-primary to-blue-700 text-white text-sm">
                            Download
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>