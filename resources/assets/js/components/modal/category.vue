<template>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="row col-md-4 col-lg-4 col-sm-4" style="background:white; margin:10px;">

                    <h3>Category</h3>
                    <form>
                        <div class="form-group">
                            <label for="project-name">Customer Name<span class="required">*</span> </label>
                            <input type="text" class="form-control" placeholder="Enter your name"
                            />
                        </div>


                        <div class="form-group">
                            <label>Description</label>
                            <textarea  type="text" placeholder="enter description" class="form-control autosize-target text-left"
                                       rows="4" style="resize:vertical"   spellcheck="false">
                    </textarea>
                        </div>

                        <div class="form-group">
                            <label for="project-name">Customer phone<span class="required">*</span> </label>
                            <input type="text" class="form-control"  id="project-name"
                            />
                        </div>

                        <div class="form-group">
                            <label for="project-name">Customer Email<span class="required">*</span> </label>
                            <input type="email" class="form-control"  id="project-name"
                            />
                        </div>

                        <div class="form-group">
                            <label>Customer Address</label>
                            <textarea  type="text" placeholder="enter description" class="form-control autosize-target text-left"
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
        <!-- //Modal content-->
    </div>
</template>