<template>
        <div class="container user-area">
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
            <div class="row user-area-inner" v-if="userLoggedIn">
                <user_dashboard_edit_form></user_dashboard_edit_form>
                <div class="col-sm-8 panel">
                    <userProfile :formattedUserData="formattedUserData"></userProfile>
                </div>
                <div class="col-sm-4">
                    <weather_widget></weather_widget>
                </div>
            </div>
        </div>
</template>

<script>
    import userMixins from '../admin/mixins/user-mixins.js';
    import formMixins from '../admin/mixins/form-mixins';

    export default {
        mixins: [ userMixins, formMixins ],
        props: [
            'logged_user',
            'user_data'
        ],
        data() {
            return{
                formattedUserData: {}
            }
        },
        mounted() {
            // TODO Ask Shinttapix for Vue Help about child components
            this.toJSON();
        },
        methods: {
            toJSON: function () {
                this.formattedUserData = JSON.parse(this.user_data);
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../sass/variables";
    .col-sm-8 {
        padding: 20px;
    }
    .col-sm-4 {
        a {
            margin-top: 28px;
        }
    }
</style>
