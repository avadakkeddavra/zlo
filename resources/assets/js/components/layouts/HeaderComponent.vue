<template>
    <header>
        <div class="search row">

            <div class="input-field col s4">
                <input type="text" id="search" value="Что ищите?">
            </div>

            <div class="input-field col s4">
                <select name="" >
                    <option value="">Категория</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
            </div>

            <div class="input-field col s4">
                <select name="">
                    <option value="0">Расстояние</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
            </div>
            <button class="btn teal" id="searchBtn"><i class="fa fa-search"></i></button>
        </div>

        <p>Расширенный поиск <i class="fa fa-angle-double-down"></i></p>

    </header>
</template>

<script>
    export default {
        name: "header-component"
    }
</script>
