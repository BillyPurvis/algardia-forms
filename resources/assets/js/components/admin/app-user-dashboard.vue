<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 user-panel">
                <div class="col-sm-8">
                    <h1>Welcome, {{ welcomeResponse }}!</h1>
                </div>
                <div class="col-sm-4" v-if="userLoggedIn">
                    <a class="pull-right" href="/api/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import formAnimations from '../admin/mixins/hello.js';

    export default {
        mixins: [ formAnimations ],
        props: [
            'logged_user',
        ],
        mounted() {

        },
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
