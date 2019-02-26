<template>
    <div>
        <div class="row m-t-30">
            <div class="col-sm-12">
                <div class="panel panel-default p-0">
                    <div class="panel-body p-0">
                        <ul class="nav nav-tabs profile-tabs">
                            <li class=""><a data-toggle="tab" href="" aria-expanded="false">About Me</a></li>
                            <li class=""><a data-toggle="tab" href="" aria-expanded="false">Activities</a></li>
                            <li class="active"><a data-toggle="tab" href="" aria-expanded="true">Settings</a></li>
                            <li class=""><a data-toggle="tab" href="" aria-expanded="false">Projects</a></li>
                        </ul>

                        <div class="tab-content m-0">

                            <!-- settings -->
                            <div id="edit-profile" class="tab-pane active">
                                <div class="user-profile-content">
                                    <div class="alert alert-success" v-if="submitted">
                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                        Profile is updated
                                    </div>
                                    <form @submit.prevent="submit()">
                                        <div class="form-group">
                                            <input type="hidden" name="id" v-model="authUser.id">
                                            <label>Name</label>
                                            <input type="text" name="name" v-model="authUser.name"  class="form-control">
                                            <p class="help is-danger" style="color:red;">{{ getErrors('name')}}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" v-model="authUser.username" class="form-control">
                                            <p class="help is-danger" style="color:red;">{{ getErrors('username')}}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="Username">Email</label>
                                            <input type="email" name="email" v-model="authUser.email" id="Username" class="form-control">
                                            <p class="help is-danger" style="color:red;">{{ getErrors('email')}}</p>
                                        </div>

                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import {authUsers} from '../utilities/config'
    import {postEdit} from '../utilities/config'
    export default{
        data(){
            return{
                authUser:{},
                errors:{},
                submitted:false
            }
        },
        created(){
            this.authentic();
        },

        methods: {
            authentic() {
                axios.get(authUsers).then((res) => {
                    this.authUser = res.data
                })
            },
            submit(){
                axios.post(postEdit, this.authUser).then(function(response){

                    this.submitted=true;
                })
                    .catch((error)=>{
                    this.errors= error.response.data
                })
            },
            getErrors(field){
                if(this.errors.hasOwnProperty(field)){
                    if(typeof this.errors[field]=== "object"){
                        return this.errors[field][0];
                    }
                    if(typeof this.errors[field]==="string"){
                        return this.errors[field]
                    }
                }
            }
        }
    }
</script>