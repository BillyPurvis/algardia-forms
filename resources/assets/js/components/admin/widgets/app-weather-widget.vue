<template>
    <div class="widget">
        <div class="widget-inner">
            <img :src="iconURL" alt="" />
            <h6>Temp: {{ tempC }}</h6>
            <h6>City: {{ city }} </h6>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                weatherData: {},
                city: null,
                tempC: null,
                iconURL: "/images/sun.png",
                Geo: {
                    lat: null,
                    long: null
                }
            }
        },
        mounted() {
            this.getLocation();
           // this.getWeatherData();
        },
        methods: {
            getLocation: function() {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        this.Geo.lat = position.coords.latitude
                        this.Geo.long = position.coords.longitude

                        // TODO Return Promise
                        // http://www.loganfranken.com/blog/879/es6-everyday-promises/
                        this.getWeatherData();
                    }
                )
            },
            getWeatherData: function () {
                axios.get("/api/weather/?lat=" + this.Geo.lat + "&long="+ this.Geo.long +"").then(response => {
                    this.weatherData = response.data;
                    this.setWeatherData();
                });
            },
            setWeatherData: function () {
                console.log('blue');
                this.city = this.weatherData.location.city;
                this.tempC = this.weatherData.current_observation.temp_c;
            },
            sayHello: function () {
                console.log('babel');
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../../sass/variables";
    .widget {
        padding: 20px;
        background: #fff;
        .widget-inner {

        }
    }
</style>
