/* --------------------------------------------------------------------------
 * File        : config-theme.js
 * Author      : indonez
 * Author URI  : http://www.indonez.com
 *
 * Indonez Copyright 2020 All Rights Reserved.
 * -------------------------------------------------------------------------- 
 * javascript handle initialization
    1. uikit slideshow
    2. Modal iframe
    3. Counter config
 * -------------------------------------------------------------------------- */

'use strict';

const HomepageApp = {
    //----------- 1. uikit slideshow -----------
    theme_slideshow: function() {
        UIkit.slideshow('.in-slideshow', {
            autoplay: true,
            autoplayInterval: 7000,
            pauseOnHover: false,
            animation: 'fade',
            minHeight: 480,
            maxHeight: 700
        });
    },
    //---------- 2. Modal iframe -----------
    theme_iframe: function() {
        const youtube = new iframeVid({
            selector: '.in-iframe',
            url: 'https://www.youtube.com/embed/F3QpgXBtDeo',
            width: 900,
            height: 506
        });
    },
    //---------- 3. Counter config -----------
    theme_counter: function() {
        const counter = new counterUp({
            selector: '.count',
            start: 0,
            duration: 3200,
            intvalues: true,
            interval: 50
        });
        counter.start();
    },
    theme_init: function() {
        HomepageApp.theme_slideshow();
        HomepageApp.theme_iframe();
        HomepageApp.theme_counter();
    }
}

document.addEventListener('DOMContentLoaded', function() {
    HomepageApp.theme_init();
});