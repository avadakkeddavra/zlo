<template>
    <div :class="'grid-item col xl2 l3 m4 s12'">

        <div class="card">
            <div class="card-image">
                <img src="https://materializecss.com/images/sample-1.jpg">

            </div>
            <div class="card-content">
                <span class="card-title">{{post.title}}</span>
                <div class="rate">
                    <!--<i class="fa fa-star" v-for="n in parseInt(post.mark)"></i>-->
                    <i class="fa fa-star-o"></i>

                    <span class="mark"><b></b>/5</span>

                </div>

                <div class="category-location">
                    <a href="#">{{post.category.title}}</a>
                    <i class="fa fa-map-marker"></i>
                    <a href="#">{{distance}} (км)</a>
                </div>
            </div>
            <div class="card-action">
                <a v-bind:href="'/post/'+post.id" class="pull-left">Инфо</a>
                <button class="like"><i class="fa fa-heart"></i></button>
                <div class="price pull-right"> ₴</div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "single-post-component",
        mounted(){
            console.log(this.post);
        },
        created()
        {
            let that = this;
            navigator.geolocation.getCurrentPosition(

                function(position) {

                    GoogleMapsLoader.LIBRARIES = ['geometry', 'places'];
                    GoogleMapsLoader.KEY = 'AIzaSyD3RFvu3elNMNPqdEEheazp0oOdvowmip8';

                    GoogleMapsLoader.load(function(google) {


                        let userCoords = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                        let postCoords = new google.maps.LatLng(that.post.latitude,that.post.longitude);

                        that.distance = (google.maps.geometry.spherical.computeDistanceBetween(userCoords, postCoords) / 1000).toFixed(2);

                        window.distance = that.distance;

                        return that.distance;
                    });

                    console.log(window.distance);
                },

                function(error){
                    console.log(error);
                }
            );
        },
        data(){
            return {
                distance: 0
            };
        },
        props: ['post']
    }
</script>

<style scoped>

</style>