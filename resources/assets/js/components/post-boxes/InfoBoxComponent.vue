<template>
    <div class="box box-default box-info">
        <div class="box-header">
            <div class="row">
                <div class="col s1">
                    <button class="btn-flat"><i class="fa fa-heart"></i></button>
                </div>
                <div class="col s11">
                    <div class="box-title">Информация</div>
                    <p>Категория: Стулья</p>
                    <div class="rate">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                        <span class="mark"><b>4.3</b>/5</span>

                    </div>
                    <ul class="tags">
                        <li><a href="#"><i class="fa fa-tag"></i>tag1</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>tag2</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>tag3</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>tag4</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i>tag5</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a class="active" href="#description">Описание</a></li>
                        <li class="tab col s3"><a href="#details">Детали</a></li>
                    </ul>
                </div>
                <div id="description" class="col s12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, autem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa molestiae modi ut deserunt iure ducimus, consequuntur id dolores iusto quibusdam mollitia aperiam nihil. Minima quae voluptates voluptatibus, similique vel repellat sapiente iusto dignissimos ipsum, iste. Rem odit fugiat, labore possimus provident libero dolore id tempore reprehenderit, consequuntur, amet ad cupiditate!</p>
                </div>
                <div id="details" class="col s12">
                    <ul>
                        <li><b>Field</b>Lorem ipsum dolor sit amet.</li>
                        <li><b>Field</b>Lorem ipsum dolor sit amet.</li>
                        <li><b>Field</b>Lorem ipsum dolor sit amet.</li>
                        <li><b>Field</b>Lorem ipsum dolor sit amet.</li>
                        <li><b>Field</b>Lorem ipsum dolor sit amet.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "info-box-component"
    }
</script>

<style scoped>

</style>