<template>
    <div>
        <div class="container">
            <div class="row col-md-4 col-lg-4 col-sm-4" style="background:white; margin:10px;">

                <h3>Category</h3>
                <div class="alert alert-success" v-if="submitted">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                    Category Successfully Added
                </div>
                <form @submit.prevent="submit()">
                    <div class="form-group">
                        <label>Name<span class="required">*</span> </label>
                        <input type="text" class="form-control" v-model="catel.category" placeholder="Enter your name"
                        />
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea  type="text" placeholder="enter description" class="form-control autosize-target text-left"
                                   rows="4" style="resize:vertical"  v-model="catel.description"  spellcheck="false">
                    </textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="submit" />
                    </div>
                </form>
            </div>


        </div>
    </div>
</template>
<script>
    import {addCat} from '../utilities/config'
    export default {
        data(){
            return {
                catel:{
                    category:'',
                    description:'',

                },
                submitted:false

            }
        },
        methods:{
            submit(){

                axios.post(addCat,this.catel).then(response=> {
                    this.submitted=true;
                    this.catel = "";

                })



            },

        }
    }
</script>