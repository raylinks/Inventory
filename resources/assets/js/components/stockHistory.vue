<template>
    <div>
        <div class="row">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="portlet"><!-- /primary heading -->
                        <div class="portlet-heading">
                            <h3 class="portlet-title text-dark text-uppercase" style="color:rebeccapurple;">
                                STOCK HISTORY
                            </h3>
                            <div class="clearfix"></div>
                        </div>
                        <nav aria-label="page navigation example">
                            <ul class="pagination">
                                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#"
                                                                                                                @click="myCategories(pagination.prev_page_url)">Previous</a></li>
                                <li class="page-item disabled"><a class="page-link text-dark" href="#">page{{pagination.current_page}} of
                                    {{pagination.last_page}} </a></li>

                                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="myCategories(pagination.next_page_url)">Next</a></li>

                            </ul>
                        </nav>


                        <form class="form-horizontal" role="form">
                            <div class="form-group">

                                <label class="col-md-2 control-label"  style="color:blueviolet;">SEARCH</label>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" v-model="filterKey" style="border-color: #0b74c7"
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
                                            <th>Date</th>
                                            <th>Category</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Size</th>
                                            <th>Rate</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="his in filteredData" >
                                            <td></td>
                                            <td>{{his.created_at| formatDate}}</td>
                                            <td>{{his.category.category}}</td>
                                            <td>{{his.product.product}}</td>
                                            <td>{{his.quantity}}</td>
                                            <td>{{his.size}}</td>
                                            <td>{{his.rate}}</td>
                                            <td>{{his.total}}</td>
                                            <td style="text-align:center; width:112px;">
                                                <a :href="`/edit-stock/${his.id}`" class="btn btn-primary btn-xs " title="Edit"><i class="fa-fa-edit"></i></a>
                                                <a :href="`/delete-stock/${his.id}`"  class="btn btn-primary btn-xs " title="Delete"><i class="fa-fa-trash-o"></i></a>
                                                <a href="" target="_blank" class="btn btn-danger btn-xs "
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
                                            <td><span class="label label-info">Total:</span></td>
                                            <td></td>
                                            <td>
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
        </div>
    </div>
</template>
<script>
    import {stockHistory} from '../utilities/config'
    export default{
        data(){
            return{
                history:{},
                category: {},
                filterKey:'',
                sortKey:'',
                sortOrders:1,
                pagination:{},

            }
        },
        created(){
            this.myCategories();
        },
        computed: {
            filteredData(){
                var sortKey = this.sortKey
                var filterKey = this.filterKey && this.filterKey.toLowerCase()
                var order = this.sortOrders[sortKey] || 1
                var data = this.category
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

        methods: {
           /* myCategories() {
                axios.get(stockHistory).then((res) => {
                    this.category = res.data
                })
            },*/
            myCategories(page_url) {
                // let vm=this;
                page_url = page_url || stockHistory
                axios.get(page_url).then((response) => {
                    this.makePagination(response.data);
                    this.category = response.data.data;
                })
            },

            makePagination(data) {
                let pagination = {
                    current_page: data.current_page,
                    last_page: data.last_page,
                    next_page_url: data.next_page_url,
                    prev_page_url: data.prev_page_url,
                    total: data.total
                };
                this.pagination = pagination;

            },
            stockDelete(stock){
                this.stock.$remove(stock);
            }
        }
    }
</script>