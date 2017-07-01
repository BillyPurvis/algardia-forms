<template>
    <div class="container">
        <div class="row">
           <form v-show="showForm" id="profile-edit-form" class="form-horizontal" role="form" method="POST" action="/api/login">
               <div class="form-group form-title">
                    <h1>Edit Profile</h1>
                </div>
                <!-- CSRF TOKEN -->
                <input type="hidden" name="_token">

               <div class="form-group col-md-6">
                   <label for="name">Name</label>
                   <div class="input-wrap">
                       <input id="name" type="text" class="form-control" placeholder="" name="name" value=""  autofocus>
                   </div>
               </div>

               <div class="form-group col-md-6">
                   <label for="city">City</label>

                   <div class="input-wrap">
                       <input id="city" type="text" class="form-control" placeholder="" name="city" value=""  autofocus>
                   </div>
               </div>

               <div class="form-group col-md-6">
                   <label for="country">Country</label>

                   <div class="input-wrap">
                       <input id="country" type="text" class="form-control" placeholder="" name="country" value=""  autofocus>
                   </div>
               </div>

               <div class="form-group col-md-6">
                   <label for="skills">skills</label>

                   <div class="input-wrap">
                       <input id="skills" type="text" class="form-control" placeholder="" name="skills" value=""  autofocus>
                   </div>
               </div>

                <div class="form-group col-sm-12">
                    <label for="bio">Bio</label>

                    <div class="input-wrap">
                        <textarea name="bio" id="bio" class="form-control" autofocus></textarea>
                    </div>
                </div>

                <div class="form-group form-controls col-sm-12">
                        <div class="btn-wrap active-btn-wrap pull-left">
                        <button type="submit" class="btn btn-primary">
                            Update
                         </button>
                        </div>

                    <div class="btn-wrap in-active-btn-wrap pull-right">
                        <button class="btn btn-primary btn-cancel" @click.prevent="toggleForm">
                            Cancel
                         </button>
                    </div>
                </div>

           </form>
        </div>
    </div>
</template>

<script>
 import formMixins from '../admin/mixins/form-mixins';
    export default {
        mounted() {
        },
        data() {
            return {
//                showForm: false
            }
        },
        mixins: [formMixins],
        // TODO Create new form transition for mixin
        methods: {

        }
    }
</script>

<style lang="scss">
    #profile-edit-form {
       z-index: 2;
        right: 0;
        left: 0;
        margin: 0 auto;
        max-width: 50%;
        position: absolute;
    }
</style>
