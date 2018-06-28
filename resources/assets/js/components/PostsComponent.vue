<template>
    <div class="posts-container">
        <div class="grid row" id="grid">
            <single-post-component v-for="(post,index) in posts" :key="index" :post="post"></single-post-component>
            <div class="clearfix"></div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "posts-component",
        mounted()
        {

            $(document).ready(function(){
                var gridElement = document.getElementById('grid');


                var msnry = new Masonry( gridElement, {
                    itemSelector: '.grid-item',
                    columnWidth: '.grid-item',
                    transitionDuration: '0.8s'
                });

                msnry.reloadItems()
            });

        },
        props: ['posts']
    }
</script>

<style scoped>

</style>