<template>
    <div class="box box-default">
        <div class="box-header">
            <div class="box-title">Комментарии</div>
        </div>
        <div class="box-body">
            <div class="comments">
                <div class="row">
                    <div class="col s1">
                        <img src="https://templates.joomla-monster.com/joomla30/jm-myoffers/components/com_djclassifieds/images/profile/867_member2_ths.jpg" alt="" class="responsive-img">
                    </div>
                    <div class="input-field col s10">
                        <textarea id="comment"></textarea>
                        <button class="btn">Отправить</button>
                    </div>
                </div>

                <single-comment-component v-for="n in 10" :key="n"></single-comment-component>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "comments-layout-component"
    }
</script>

<style scoped>

</style>