
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

// User areas
Vue.component('user_dashboard', require('./components/admin/app-user-dashboard.vue'), {
    props: [
        'logged_user',
        'csrf_token',
        'is_logged_in'
    ]
});
Vue.component('user_dashboard_edit_form', require('./components/admin/app-user-dashboard-edit-profile-form.vue'), {
    props: [
        'csrf_token'
    ]
});
Vue.component('user_login', require('./components/admin/app-user-login-form.vue'), {
    props: [
        'csrf_token'
    ]
});
Vue.component('userProfile', require('./components/admin/app-user-dashboard-profile.vue'), {
    props: [
        'formattedUserData'
    ]
});

// Widgets
Vue.component('weather_widget', require('./components/admin/widgets/app-weather-widget.vue'));


const app = new Vue({
    el: '#app',
});
