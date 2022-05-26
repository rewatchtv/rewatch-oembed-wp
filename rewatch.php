<?php
/*
Plugin Name: Rewatch oEmbed WP
Description: Adds oEmbed support for Rewatch videos
Version: 1.0.0
Author: Rewatch
Author URI: https://rewatch.com
Requires at least:  3.0
Tested up to: 6.0
License: GPL2
Copyright (C) 2022 Rewatch

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Contact Rewatch at support@rewatch.com
*/

function rewatch_oembed() { 
    wp_oembed_add_provider( 'http://*.rewatch.com/video/embed/*', 'http://rewatch.com/oembed' );
}

    add_action( 'init', 'rewatch_oembed' );