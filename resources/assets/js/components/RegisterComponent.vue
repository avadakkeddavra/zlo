<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" id="register-form">


                            <div v-bind:class=" ('name' in errors) ? 'form-group has-error' : 'form-group' ">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" @change="onChange" v-model="name" type="text" class="form-control" name="name" value="" required autofocus>


                                    <span class="help-block" v-if=" 'name' in errors" >
                                        <strong>{{errors.name[0]}}</strong>
                                    </span>

                                </div>
                            </div>

                            <div v-bind:class=" ('email' in errors) ? 'form-group has-error' : 'form-group' ">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" v-model="email" class="form-control" name="email" value="" required>


                                    <span class="help-block" v-if=" 'email' in errors">
                                        <strong>{{errors.email[0]}}</strong>
                                    </span>

                                </div>
                            </div>

                            <div v-bind:class=" ('password' in errors) ? 'form-group has-error' : 'form-group' ">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" v-model="password" class="form-control" name="password" required>


                                    <span class="help-block" v-if=" 'password' in errors">
                                        <strong>{{errors.password[0]}}</strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" v-model="confirm" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="button" class="btn btn-primary" @click="register()">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        created()
        {

        },
        data(){
            return {
                errors: {},
                name:'',
                email:'',
                password:'',
                confirm:''
            };
        },
        methods:{
            register: function(){

                   axios.post('/register',{
                       name:this.name,
                       email:this.email,
                       password:this.password,
                       password_confirmation: this.confirm
                   })
                   .then(response => {
                        if(response.status == 200)
                        {
                            window.location = '/home';
                        }
                   })
                   .catch(e => {

                       this.errors = e.response.data.errors;
                       console.log(this.errors);

                   })

            },
            onChange: function (event)
            {
                console.log(event.target);
                if($(event.target).parents('.from-group').hasClass('has-error')){
                    $(event.target).parents('.from-group').removeClass('has-error');
                    $(event.target).parents('.from-group').find('.help-block').children('strong').html('');
                }
            }
        },
        props:[]
    }
</script>
