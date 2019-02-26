@extends('layouts.master5')
@section('content')
    <div id="app">
        <div class="row">

            <div class="col-md-4"></div>
            <div class="page-wrap">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet"><!-- /primary heading -->
                            <div class="portlet-heading">
                                <h3 class="portlet-title text-dark text-uppercase">
                                    STOCK AVAILABLE
                                </h3>
                                <nav aria-label="page navigation example">
                                    <ul class="pagination">
                                        <li :class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a class="page-link" href="#"
                                                                                                                  @click="getSelling(pagination.prev_page_url)">Previous</a></li>
                                        <li class="page-item disabled"><a class="page-link text-dark" href="#">page@{{pagination.current_page}} of
                                                @{{pagination.last_page}} </a></li>

                                        <li :class="[{disabled: !pagination.next_page_url}]" class="page-item"><a class="page-link" href="#" @click="getSelling(pagination.next_page_url)">Next</a></li>

                                    </ul>
                                </nav>

                                <div class="clearfix"></div>
                            </div>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">

                                    <label class="col-md-2 control-label"  style="color:tomato;">SEARCH</label>
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
                                                <th>Date</th>
                                                <th>Category</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Size</th>
                                                <th>Rate</th>
                                                <th>Total</th>
                                                <th>Paid</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-for="cat in filteredData">
                                                <td>..</td>
                                                <td>@{{cat.date}}</td>
                                                <td>@{{cat.category_id}}</td>
                                                <td>@{{cat.product_id}}</td>
                                                <td>@{{cat.quantity}}</td>
                                                <td>@{{cat.size}}</td>
                                                <td>@{{cat.rate}}</td>
                                                <td>@{{cat.total}}</td>
                                                <td>@{{cat.paid}}</td>
                                                <td style="text-align:center; width:112px;">
                                                    <a   class="btn btn-primary btn-xs " title="Edit"><i class="fa-fa-edit"></i></a>
                                                    <a :href="`http://localhost:8000/delete-sell/${cat.id}`"   class="btn btn-primary btn-xs"  title="Delete"><i class="fa-fa-trash-o"></i></a>
                                                    <a :href="'/printinvoice'" target="_blank" class="btn btn-danger btn-xs "
                                                       title="Print"><i class="fa-fa-print"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="label label-success">Total:</span></td>
                                                <td></td>
                                                <td></td>
                                                <td >
                                                    <span class="label label-success" ><a style="color:red;" :href="'/paydue'">Due Payable</a></span>
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
    </div>

@endsection