<template>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                    <header class="panel-heading">
                        <p style="color:greenyellow;">EDIT STOCK</p>
                    </header>


                    <form @submit.prevent="addStock()">
                        <div class="alert alert-success" v-if="submitted">
                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                            Successfully Added
                        </div>

                        <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                            <div class="form-group">

                                <div class="col-sm-3">
                                    <label>Category</label>
                                    <div class="input group">
                                        <select class="form-control" name="category_id" v-model="stock.category_id">
                                            <option value="0">Choose a Category * -</option>
                                            <option v-for="cat in category.categories"  v-bind:value="cat.id">{{ cat.category }}</option>

                                        </select>
                                        <div class="input-group-addon">
                                            <span class="fa fa-plus"  data-toggle="modal" data-target="#myModal2"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label>Products</label>
                                    <div class="input group">
                                        <select class="form-control" name="product_id" v-model="stock.product_id">
                                            <option value="0">Choose a product * -</option>
                                            <option v-for="bra in category.products" v-bind:value="bra.id">{{ bra.product }}</option>

                                        </select>
                                        <div class="input-group-addon">
                                            <span class="fa fa-plus" id="add-more-academic" ></span>
                                        </div>
                                    </div>
                                </div>



                                <div class="col-sm-12 col-md-6">
                                    <div class="panel panel-default panel-hovered panel-stacked mb20">
                                        <div class="panel-heading">Stock</div>
                                        <div class="panel-body">
                                            <!-- form horizontal acts as a row -->
                                            <!-- normal control -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Quantity</label>
                                                <div class="col-md-9">
                                                    <input type="text"   v-model="stock.quantity"
                                                           class="form-control">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('quantity')}}</p>
                                                </div>
                                            </div>

                                            <!-- with hint -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Size</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" v-model="stock.size" >

                                                </div>
                                                <p class="help is-danger" style="color:red;">{{ getErrors('size')}}</p>
                                            </div>

                                            <!-- textarea control -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Rate</label>
                                                <div class="col-md-9">
                                                    <input type="text"   v-model="stock.rate" class="form-control">

                                                </div>
                                                <p class="help is-danger" style="color:red;">{{ getErrors('rate')}}</p>
                                            </div>

                                            <!-- warning control -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Total</label>
                                                <div class="col-md-9">
                                                    <input type="text"   v-model="stock.total = result" class="form-control">
                                                </div>
                                            </div>

                                            <!-- error control -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Paid</label>
                                                <div class="col-md-9">
                                                    <input type="text"  placeholder="Paid" v-model="stock.paid" class="form-control" disabled>

                                                </div>
                                            </div>

                                            <!-- <div class="form-group">
                                                 <label class="col-md-3 control-label">Due</label>
                                                 <div class="col-md-9">
                                                     <input type="text" name="due" placeholder="Due" v-model="stock.due" class="form-control">
                                                     &lt;!&ndash;<p class="help is-danger" style="color:red;">{{ getError('due')}}</p>&ndash;&gt;
                                                 </div>
                                             </div>-->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <input type="date"  placeholder="Date" v-model="stock.date" class="form-control">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('date')}}</p>

                                                </div>
                                            </div>
                                            <div class="clearfix right">

                                                <button type="submit" class="btn btn-success btn-quirk btn-block">Create Account</button>
                                                <!--   <button class="btn btn-primary mr5" type="button" >Submit</button>-->
                                                <button class="btn btn-default">Cancel</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</template>
<script>
    import {getTrans} from '../utilities/config'
    import {addStock} from '../utilities/config'
    export default{
        data(){
            return{
                category: {},
                errors:{},
                submitted: false,
                stock:{
                    quantity:'',
                    size:'',
                    rate:'',
                    total:'',
                    paid:'PAID',
                    date:'',
                    category_id:'',
                    product_id:''
                }
            }
        },
        computed: {
            result: function () {
                return this.stock.rate * this.stock.quantity;
            }
        },
        created(){
            this.getCategories();
        },

        methods: {
            getCategories() {
                axios.get(getTrans).then( (res) =>{
                    this.category = res.data
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




