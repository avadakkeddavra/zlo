<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" @click.prevent="">Example Component</div>

                    <div class="panel-body" v-for="item in data">
                       {{item}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(this.test)
        },
        created()
        {
            this.data = [
                'data', 'asasd'
            ];
        },
        data(){
            return {
              data:'hello'
            };
        },
        methods:{

        },
        props:['test']
    }
</script>
