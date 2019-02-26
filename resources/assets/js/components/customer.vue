<template>
    <div>
        <section class="panel panel-default">

            <!-- Modal2 -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">

                            <header class="panel-heading">
                                Choose Academics
                            </header>
                            <form class="form-horizontal">
                                <div class="panel-body" style="border-bottom: 1px solid #ccc;">
                                    <div class="form-group">





                                        <div class="col-sm-2">
                                            <label>Group</label>
                                            <div class="input group">
                                                <select class="form-control" name="group_id" id="group_id">

                                                </select>
                                                <div class="input-group-addon">
                                                    <span class="fa fa-plus" data-toggle="modal" data-target="#myModal2"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </form>
                            <div class="panel panel-default">
                                <div class="panel-heading">Class information</div>
                                <div class="panel-body" id="add-class-info"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>