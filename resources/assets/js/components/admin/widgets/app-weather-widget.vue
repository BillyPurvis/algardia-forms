<template>
    <div class="widget panel">
        <div class="widget-inner">
            <h2>Weather</h2>
            <p v-if="!weatherData">
                Loading weather<span class="dot-animation">.</span><span class="dot-animation">.</span><span
                    class="dot-animation">.</span>
            </p>
            <transition name="fade">
                <div v-show="weatherData" class="widget-data">
                    <img :src="iconURL" alt="" />
                    <h6>Temp: {{ tempC }} &#176;C / {{ tempF }} &#176;F</h6>
                    <h6>City: {{ city }} </h6>
                </div>
            </transition>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                weatherData: null,
                city: null,
                tempC: null,
                tempF: null,
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
                axios.get("api/weather?lat=" + this.Geo.lat + "&long="+ this.Geo.long +"", {
                    baseURL: process.env.NODE_ENV === 'production' ? process.env.APP_AXIOSURL : 'http://localhost:8000/'
                }).then(response => {
                    this.weatherData = response.data;
                    this.setWeatherData();
                });
            },
            setWeatherData: function () {
                console.log('blue');
                this.city = this.weatherData.location.city;
                this.tempC = this.weatherData.current_observation.temp_c;
                this.tempF = this.weatherData.current_observation.temp_f;
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
        min-height: 211px;
        .widget-inner {

        }
    }

</style>
