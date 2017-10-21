
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});


$('#grid2 img').each(function(){
    var $this = $(this);
    $this.wrap('<div class="item"><a></a></div>');
    $('a').removeAttr('href');
});
$('#grid2').addClass('effect-2');

$(window).load(function(){
    var $container = $('.grid');
    // initialize
    $container.masonry({
        //columnWidth: 200,
        itemSelector: '.item'
    })
    $('.item > a').removeAttr('href')
})

