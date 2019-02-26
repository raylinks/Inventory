<template>
    <div>
        <div class="container">
            <div class="row col-md-4 col-lg-4 col-sm-4" style="background:white; margin:10px;">

                <h3>Product</h3>
                <div class="alert alert-success" v-if="submitted">
                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                    A product is Successfully added
                </div>
                <form @submit.prevent="add()">
                    <div class="form-group">
                        <label>Category ID<span class="required">*</span> </label><br>
                        <select class="form-control" name="category_id" v-model="submit.category_id">
                            <option value="0">Choose a Category * -</option>
                            <option v-for="cat in category.categories"  v-bind:value="cat.id">{{ cat.category }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Product<span class="required">*</span> </label>
                        <input type="text" v-model="submit.product" class="form-control" placeholder="Enter your name"
                        />
                    </div>

                    <div class="form-group">
                        <label>Product Image<span>*</span> </label>
                        <input type="file"  class="form-control"
                        />
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea  type="text" v-model="submit.description" placeholder="enter description" class="form-control autosize-target text-left"
                                   rows="4" style="resize:vertical"   spellcheck="false">
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
    import {getCategories} from '../utilities/config'
    import {addProduct} from '../utilities/config'
    export default{
        data(){
            return{
                submit:{
                    product:'',
                    description:'',
                    name:''
                },
                category: {},
                submitted:false
            }


        },
        created(){
            this.getCategories();
        },
        methods:{
            getCategories() {
                axios.get(getCategories).then( (res) =>{
                    this.category = res.data
                })
            },
            add(){
                axios.post(addProduct,this.submit).then(response=>{
                    this.submitted=true;
                    this.submit = "";

                })
            }
        }
    }
</script>