<template>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <section class="panel panel-default">
                    <header class="panel-heading">
                        STYLEPALETTE
                    </header>
                    <div class="alert alert-success" v-if="submitted">
                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                        Transaction is Successfully made
                    </div>
                    <form  @submit.prevent="submit()" class="form-horizontal">

                        <input type="hidden" name="active" id="active" value="1">
                        <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                            <div class="form-group">

                                <div class="col-sm-3">
                                    <label>Category!</label>
                                    <div class="input group">
                                        <select class="form-control" name="categoty_id" v-model="sell.category_id">
                                            <option value="0">Choose a Category * -</option>
                                            <option v-for="cat in category.categories"  v-bind:value="cat.id">{{ cat.category }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label>Product</label>
                                    <div class="input group">
                                        <select class="form-control" name="product_id"  v-model="sell.product_id">
                                            <option value="0">Choose a product * -</option>
                                            <option v-for="bra in category.products" v-bind:value="bra.id">{{ bra.product }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label>Method of pay</label>
                                    <div class="input group">
                                        <select class="form-control" name="payment"  v-model="sell.payment">
                                            <option value="0">Method of Payment * -</option>
                                            <option value="1">Cash Payment * -</option>
                                            <option value="2">POS * -</option>
                                            <option value="3">Bank transfer * -</option>

                                        </select>
                                    </div>
                                </div>

                                <!--<p>{{settings}}</p>-->



                                <div class="col-sm-12 col-md-6">
                                    <div class="panel panel-default panel-hovered panel-stacked mb20">
                                        <div class="panel-heading" style="color:forestgreen;">Sold Stock</div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Buyer Name</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="buyer" v-model="sell.buyer" class="form-control">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('buyer')}}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Quantity</label>
                                                <div class="col-md-9">
                                                    <input type="text" v-model="sellToBeUpdated.quantity" class="form-control">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('quantity')}}</p>
                                                </div>
                                            </div>

                                            <!-- with hint -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Size</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="size" v-model="sell.size" class="form-control" placeholder="size">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('size')}}</p>
                                                </div>
                                            </div>



                                            <!-- textarea control -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Rate</label>
                                                <div class="col-md-9" >
                                                    <input type="text" name="rate" placeholder="Rate" class="form-control" v-model="sell.rate">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('rate')}}</p>
                                                </div>
                                            </div>

                                            <!-- warning control -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Total</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="total" v-model="sell.total = result" placeholder="Total" class="form-control">
                                                </div>
                                            </div>

                                            <!-- error control -->
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Paid</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="paid" v-model="sell.paid" placeholder="Paid" class="form-control">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('paid')}}</p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Due</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="due" v-model="sell.due =due" placeholder="Due" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date</label>
                                                <div class="col-md-9">
                                                    <input type="date" placeholder="Date" v-model="sell.date" class="form-control">
                                                    <p class="help is-danger" style="color:red;">{{ getErrors('date')}}</p>
                                                </div>
                                            </div>
                                            <div class="clearfix right">
                                                <button class="btn btn-primary mr5" type="submit">Submit</button>
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
    import {addSold} from '../utilities/config'
    import {getTransaction} from '../utilities/config'

    import {getCategories} from '../utilities/config'
    import {getSettings} from '../utilities/config'
    export default{
        data(){
            return{
                sell:{
                    buyer:'',
                    quantity:'',
                    rate:'',
                    total:'',
                    size:'',
                    paid:'',
                    due:'',
                    date:'',
                    payment:'',
                    category_id:'',
                    product_id:'',
                },
                sellToBeUpdated:{},
                category: {},
                editing:{},
                settings: {},
                errors:{},
                submitted:false

            }
        },

        computed: {
            result: function () {
                return this.sell.rate * this.sell.quantity;
            },
            due:function(){
                return this.result - this.sell.paid;
            }
        },
        created(){
            this.getCategories();
            this.getEdit();
        },
        methods:{
            getCategories() {
                axios.get(getCategories).then( (res) =>{
                    this.category = res.data
                })
            },
            getEdit(){
                axios.get(getTransaction).then( (res) =>{
                    this.editing = res.data
                })
            },
            editSell(editing){
                this.sellToBeUpdated = editing;

            },
            /*getSettings() {
                axios.get(getSettings).then( (res) =>{
                    this.settings = res.data
                })
            },*/
            submit(){
                axios.post(addSold,this.sell).then(response=>{
                    this.submitted=true;

                })
                    .catch((error) =>{
                        this.errors= error.response.data;
                    });
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




