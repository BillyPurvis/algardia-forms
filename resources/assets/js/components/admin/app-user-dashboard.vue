<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

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
