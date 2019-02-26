<template>
    <div>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="" class="logo"><span>FASHION<span>--OUTLET</span></span></a>
                <h5 class="text-muted mt-0 font-600" style="color:blue;">HAFFINITY VENTURES</h5>
            </div>
            <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold mb-0">Sign In</h4>
                </div>
                <div class="p-20">
                    <form class="form-horizontal m-t-20" @submit.prevent="login()">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" v-model="loginData.email" placeholder="Email">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" v-model="loginData.password"  placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 mb-0">
                            <div class="col-sm-12">
                                <a :href="'/password/reset'" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card-box-->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Don't have an account? <a  :href="'/reg'"  class="text-primary m-l-5"><b>Sign Up</b></a></p>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return{
                loginData:{
                    email:'',
                    password:''
                },
                errors:{}
            }
        },
        methods: {
            login() {
                axios.post('http://localhost:8000/login', this.loginData)
                    .then(function (response) {
                        window.location = "/home"
                    })
                    /*.catch((error) =>{
                        this.errors= error.response.data;
                    });*/

            },
            /*getErrors(field){
                if(this.errors.hasOwnProperty(field)){
                    if(typeof this.errors[field]=== "object"){
                        return this.errors[field][0];
                    }
                    if(typeof this.errors[field]==="string"){
                        return this.errors[field]
                    }
                }

            }*/
        }
    }
</script>

