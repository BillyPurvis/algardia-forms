module.exports  = {
    data() {
        return {
            userLoggedIn: this.isUserLoggedIn(),
            welcomeResponse: this.stripSpaces()
        }
    },
    created: function () {
        this.setWelcomeMessage();
        this.stripSpaces();
        this.isUserLoggedIn();
    },
    methods: {
        setWelcomeMessage: function () {
            if(!this.isUserLoggedIn()) {
                this.welcomeResponse = 'Please Sign in';
            }
        },
        stripSpaces: function () {
            return this.logged_user.replace(/\s+/g, '');
        },
        isUserLoggedIn: function () {
            if(this.logged_user.length <= 0) {
                return false;
            }
            return true;
        }
    }
};