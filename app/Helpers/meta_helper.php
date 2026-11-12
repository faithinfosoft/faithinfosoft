<?php

if (!function_exists('display_meta')) {
    /**
     * Display meta tags (title, keywords, description)
     *
     * @param array $meta
     */
    function display_meta($meta) {
        // Title
        if (isset($meta['title']) && !empty($meta['title'])) {
            echo '<title>' . htmlspecialchars($meta['title'], ENT_QUOTES, 'UTF-8') . '</title>' . "\n";
        } else {
            echo '<title>Faith Infosoft</title>' . "\n";
            echo '<script>alert("Please set title")</script>' . "\n";
        }

        // Keywords
        if (isset($meta['keywords']) && !empty($meta['keywords'])) {
            echo '  <meta name="keywords" content="' . htmlspecialchars($meta['keywords'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        } else {
            echo '  <meta name="keywords" content="Faith Infosoft, software development, web development">' . "\n";
            echo '  <script>alert("Please set keywords")</script>' . "\n";
        }

        // Description
        if (isset($meta['description']) && !empty($meta['description'])) {
            echo '  <meta name="description" content="' . htmlspecialchars($meta['description'], ENT_QUOTES, 'UTF-8') . '">' . "\n";
        } else {
            echo '  <meta name="description" content="Faith Infosoft is a leading software development company.">' . "\n";
            echo '  <script>alert("Please set description")</script>' . "\n";
        }
    }
}
