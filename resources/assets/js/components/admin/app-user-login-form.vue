<template>
    <div class="container">
        <div class="row">
           <form v-if="!userLoggedIn" class="form-horizontal col-xs-6 col-xs-offset-3" role="form" method="POST" action="/api/login">
               <div class="form-group form-title">
                    <h1>Login</h1>
                </div>
                <!-- CSRF TOKEN -->
                <input type="hidden" name="_token" :value="csrf_token">

                <div class="form-group">
                    <label for="email">E-Mail Address</label>

                    <div class="input-wrap">
                        <input id="email" type="email" class="form-control" placeholder="email@domain.co.uk" name="email" value="" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="input-wrap">
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <span><a href="">Forgotten Password?</a></span>
                </div>

                <div class="form-group form-controls">
                        <div class="btn-wrap active-btn-wrap pull-left">
                        <button type="submit" class="btn btn-primary">
                            Login
                         </button>
                        </div>

                    <div class="btn-wrap in-active-btn-wrap pull-right">
                        <button class="btn btn-primary">
                            Sign Up
                         </button>
                    </div>
                </div>

           </form>
        </div>
    </div>
</template>

<script>
    import userMixins from '../admin/mixins/user-mixins.js';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        mixins: [ userMixins ], 
        props: [
            'logged_user',
            'csrf_token'
        ]
    }
</script>

<style lang="scss">
    form {
        top: 120px;

    }
</style>
