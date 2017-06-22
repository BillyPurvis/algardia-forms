<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{ logged_user }}</strong>
                    </div>

                    <!--<div class="panel-body">-->
                        <!--<form class="form-horizontal" role="form" method="POST" action="/api/login">-->

                        <!--<input type="hidden" name="_token" :value="csrf_token">-->

                        <!--<div class="form-group">-->
                            <!--<label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

                            <!--<div class="col-md-6">-->
                                <!--<input id="email" type="email" class="form-control" name="email" value="" required autofocus>-->
                            <!--</div>-->
                        <!--</div>-->

                            <!--<div class="form-group">-->
                                <!--<label for="password" class="col-md-4 control-label">Password</label>-->

                                <!--<div class="col-md-6">-->
                                    <!--<input id="password" type="password" class="form-control" name="password" required>-->
                                <!--</div>-->
                            <!--</div>-->

                            <!--<div class="form-group">-->
                                <!--<div class="col-md-8 col-md-offset-4">-->
                                    <!--<button type="submit" class="btn btn-primary">-->
                                        <!--Login-->
                                    <!--</button>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</form>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import formAnimations from '../admin/mixins/hello.js';

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        mixins: [ formAnimations ],
        props: [
            'logged_user',
            'csrf_token'
        ],
        methods: {
            userIsLogged: function () {
                if(this.is_logged_in !== '') {
                    console.log('blue')
                }
            }
        },
        mounted: function () {
            this.userIsLogged();
        }
    }
</script>
