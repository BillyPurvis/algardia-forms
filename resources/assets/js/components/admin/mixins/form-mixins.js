export default {
    data() {
        return {
            showForm: false
        }
    },
    methods: {
        toggleForm: function () {
            console.log('blue')
            this.showForm = !this.showForm;
        }
    }
};