<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 user-panel">
                <div class="col-sm-8">
                    <h1 class="user-welcome" v-if="userLoggedIn">Welcome, {{ welcomeResponse }}!</h1>
                </div>
                <div class="col-sm-4" v-if="userLoggedIn">
                    <a class="pull-right dash-btn" href="/api/logout">Logout</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 panel">

            </div>
            <div class="col-sm-4">
                <weather_widget></weather_widget>
            </div>
        </div>
    </div>
</template>

<script>
    import userMixins from '../admin/mixins/user-mixins.js';

    export default {
        mixins: [ userMixins ],
        props: [
            'logged_user',
        ],
        mounted() {
            // TODO Ask Shinttapix for Vue Help about child components
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../sass/variables";
    h1 {
        color: #fff;
        margin: 0;
        font-weight: 100;
        font-family: $lato;
    }
    a {
        color: #fff;
        padding: 5px 20px;
        border-radius: 7px;
        font-family: $lato;
        display: inline-block;
        text-decoration: none;
        border: 2px solid #fff;
        transition: all .3s ease;
        &:hover {
            background: rgba(255, 255, 255, 0.4);
        }
    }
    .col-sm-8 {
        padding: 20px;
    }
    .col-sm-4 {
        a {
            margin-top: 28px;
        }
    }
</style>
