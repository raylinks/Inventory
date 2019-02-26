@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row col-md-4 col-lg-4 col-sm-4" style="background:white; margin:10px;">

            <h3>Staff</h3>
            <form>
                <div class="form-group">
                    <label for="project-name">Staff Name<span class="required">*</span> </label>
                    <input type="text" class="form-control" placeholder="Enter your name" id="project-name"
                    />
                </div>
                <div class="form-group">
                    <label>Staff Description</label>
                    <textarea  type="text" placeholder="enter description" class="form-control autosize-target text-left"
                               rows="3" style="resize:vertical"   spellcheck="false">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="project-name">Staff phone<span class="required">*</span> </label>
                    <input type="text" class="form-control"  id="project-name"
                    />
                </div>
                <div class="form-group">
                    <label for="project-name">Staff Email<span class="required">*</span> </label>
                    <input type="email" class="form-control"  id="project-name"
                    />
                </div>
                <div class="form-group">
                    <label>Staff Address</label>
                    <textarea  type="text" placeholder="enter description" class="form-control autosize-target text-left"
                               rows="4" style="resize:vertical"   spellcheck="false">
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Add" />
                </div>
            </form>
        </div>
    </div>
@endsection