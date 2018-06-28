<template>
    <div class="box box-default price-box">
        <div class="box-header">
            <div class="box-title">Цена:</div>
            <div class="price">
                <span class="value">₴ 400</span>
                <p class="comment">Договорная</p>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="quantity" id="quantity">
                    <span>до 300 единиц</span>
                    <label for="quantity">Количество</label>
                </div>
            </div>
            <button class="btn btn-small">Купить</button>
            <button class="btn-flat teal-text" id="bid">История</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "price-box-component"
    }
</script>

<style scoped>

</style>