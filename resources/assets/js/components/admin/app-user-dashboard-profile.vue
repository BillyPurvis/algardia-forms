<template>
    <div class="user-area">
        <div class="row">
           <div class="col-sm-12">
               <h2>{{ formattedUserData.city }}, {{ formattedUserData.country }}</h2>
               <div class="gradient-divider"></div>
               <p>{{ formattedUserData.bio }}</p>
               <p>{{ formattedUserData.skills }}</p>
               <button class="pull-right btn-dash btn-gradient" @click.prevent="toggleForm">Edit</button>
           </div>
        </div>
    </div>
</template>

<script>
    import formMixins from '../admin/mixins/form-mixins';
    export default {
        data() {
            return {
            }
        },
        mixins: [formMixins],
        mounted() {
        },
        props: [
            'formattedUserData'
        ]
    }
</script>

<style lang="scss">
</style>
