<?php
/**
 * Plugin Name: AHSC Robots TXT
 * Description: Customizes the robots.txt file for our project on Pantheon.
 * Version: 1.0
 * Author: HashBangCrash
 */

namespace HashBangCrash\RobotsTxt;

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Override default robots.txt.
 *
 * @param string $output The default robots.txt output.
 * @param bool $public Whether the site is publicly visible.
 * @return string Modified robots.txt output.
 */
function custom_robots_txt($output, $public) {
    $robots_txt = "User-agent: *\n";
    $robots_txt .= "Sitemap: https://www.example.com/sitemap_index.xml\n";
    $robots_txt .= "Disallow: /secure/\n";
    // Add more lines as needed
    return $robots_txt;
    $robots_txt = "
# Pantheon's documentation on robots.txt: https://pantheon.io/docs/bots-and-indexing/

User-agent: RavenCrawler
User-agent: rogerbot
User-agent: dotbot
User-agent: SemrushBot
User-agent: SiteAuditBot
User-agent: SplitSignalBot
User-agent: PowerMapper
User-agent: Swiftbot
User-agent: lyticsbot
User-agent: Dubbotbot
User-agent: PopeTech-CrawlBot
User-agent: PopeTech-ScanBot
Allow: /";
}

// Hook into the robots_txt filter
add_filter('robots_txt', __NAMESPACE__ . '\\custom_robots_txt', 10, 2);
