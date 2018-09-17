<template>
    <section class="container">
        <div class="box box-default">
            <div class="box-header">
                <div class="box-title">Создать пост</div>
            </div>
            <div class="box-body">
                <form action="">
                    <div class="input-field">
                        <input type="text" name="title" id="title">
                        <label for="title">Название</label>
                    </div>
                    <div class="input-field">
                        <select name="cat_id" id="cat_id">

                            <option v-for="category in categories" :value="category.id">{{category.title}}</option>

                        </select>
                        <label for="title">Категория</label>
                    </div>
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" multiple accept="image/*">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text"  placeholder="Upload one or more files">
                        </div>
                    </div>
                    <div class="input-field">
                        <ckeditor v-model="content" :height="'300px'" :toolbar="[['Format','']]"></ckeditor>
                    </div>
                    <button class="btn">Содзать</button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
    const Ckeditor = require('vue-ckeditor/src/components/ckeditor');
    export default {
        name: "create-post-component",
        mounted(){
            console.log(this.categories);
        },
        data(){
            return {
                content: ''
            }
        },
        props:['categories'],
        components: { Ckeditor }
    }
</script>

<style scoped>

</style>