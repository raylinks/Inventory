<template>
    <div>
        <div class="page-wrap">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet"><!-- /primary heading -->
                        <div class="portlet-heading">
                            <h3 class="portlet-title text-dark text-uppercase" style="color:blueviolet;">
                                STOCK AVAILABLE
                            </h3>
                            <div class="clearfix"></div>
                            <nav aria-label="page navigation example">
                                <ul class="pagination">
                                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                                        <a class="page-link" href="#"
                                           @click="getSelling(pagination.prev_page_url)">Previous</a></li>
                                    <li class="page-item disabled"><a class="page-link text-dark" href="#">page
                                        {{pagination.current_page}} of
                                        {{pagination.last_page}} </a></li>

                                    <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="getSelling(pagination.next_page_url)">Next</a></li>
                                </ul>
                            </nav>


                            <div class="clearfix"></div>
                        </div>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">

                                <label class="col-md-2 control-label"  style="color:blueviolet;">SEARCH</label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" v-model="filterKey"  style="border-color: #0b74c7"
                                               class="form-control" placeholder="Search Product In Stock">

                                    </div>
                                </div>
                            </div>
                        </form>

                        <div id="portlet2" class="panel-collapse collapse in">
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>DATE</th>
                                            <th>BUYER</th>
                                            <th>CATEGORY</th>
                                            <th>PRODUCT</th>
                                            <th>PAYMENT</th>
                                            <th>QUANTITY</th>
                                            <th>SIZE</th>
                                            <th>RATE</th>
                                            <th>TOTAL</th>
                                            <th>PAID</th>
                                            <th>DUE</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="cat in filteredData">
                                            <td>..</td>
                                            <td>{{cat.created_at| formatDate}}</td>
                                            <td>{{cat.buyer}}</td>
                                            <td>{{cat.category.category}}</td>
                                            <td>{{cat.product.product}}</td>
                                            <td>{{cat.payment}}</td>
                                            <td>{{cat.quantity}}</td>
                                            <td>{{cat.size}}</td>
                                            <td>{{cat.rate}}</td>
                                            <td>{{cat.total}}</td>
                                            <td>{{cat.paid}}</td>
                                            <td>{{cat.due}}</td>

                                            <td style="text-align:center; width:112px;">
                                                <a  @click.prevent="editSell(cat)" class="btn btn-primary btn-xs" title="Edit"><i class="fa-fa-edit"></i></a>
                                                <a :href="`/delete-sell/${cat.id}`" class="btn btn-primary btn-xs"  title="Delete"><i class="fa-fa-trash-o"></i></a>
                                                <a :href="`/paydue/${cat.id}`"  class="btn btn-primary btn-xs " title="Due"><i class="fa-fa-due"></i></a>
                                                <a :href="`/printinvoice/${cat.id}`" target="_blank" class="btn btn-danger btn-xs "
                                                   title="Print"><i class="fa-fa-print"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="label label-success">Total:</span></td>
                                            <td><span class="label label-success">Received:</span></td>
                                            <td>
                                                <span class="label label-danger" ><a style="color:red;" >Due Payable</a></span>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /Portlet -->
                </div>
            </div> <!-- end row -->
        </div> <!-- #end main-container -->


    </div>
</template>

<script>
    import swal from 'sweetalert'
    import {getCategories} from '../utilities/config'
    import {selling} from '../utilities/config'
    import {allUsers} from  '../utilities/config'

    export default{
        data(){
            return{
                available :{
                    id:''
                },
                stock:[],
                category: {},
                sortKey: '',
                sortOrders: 1,
                filterKey:'',
                products:[],
                pagination:{},
                sellToBeUpdated: {}
            }
        },
        created(){
            this.getSelling();
        },
        computed: {
            filteredData(){
                let sortKey = this.sortKey
                let filterKey = this.filterKey && this.filterKey.toLowerCase()
                let order = this.sortOrders[sortKey] || 1
                let data = this.category
                if (filterKey) {
                    data = data.filter(function (row) {
                        return Object.keys(row).some(function (key) {
                            return String(row[key]).toLowerCase().indexOf(filterKey) > -1
                        })
                    })
                }
                if (sortKey) {
                    data = data.slice().sort(function (a, b) {
                        a = a[sortKey]
                        b = b[sortKey]
                        return (a === b ? 0 : a > b ? 1 : -1) * order
                    })
                }
                return data
            }
        },
        methods:{
            getSelling(page_url) {
               // let vm=this;
                page_url = page_url || selling
                axios.get(page_url).then((response) =>{
                    this.makePagination(response.data);
                    this.category = response.data.data;
                })
            },

            /*getSelling() {
                axios.get(selling).then((res) => {
                    this.category = res.data
                })
            },*/

            makePagination(data){
                let pagination ={
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url : data.prev_page_url,
                    total: data.total
                };
                this.pagination = pagination;

            },
            /*deleteSell(id){
                if(confirm('are you sure')){
                    axios.get(`selling/${id}`,{
                        method:'destroy'

                    }).then(res => res.json())
                        .then(data => {
                            alert('sell removed');
                            this.selling();
                        })
                        .catch(err => console.log(err));

                }

            },*/
            sellDelete(sell){
                this.sell.$remove(sell);
            },
            editSell(cat){
                this.sellToBeUpdated = cat;

            },


        }
    }
</script>
