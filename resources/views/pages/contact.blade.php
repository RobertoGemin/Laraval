@extends('vendor.main')
@section('title','| Contact')
@section('content')
            <div class="row">
                <div class="col-md-12">
                    <h1> Contact me</h1>
                   <hr>
                    <form>
                        <div class="form-group">
                            <label name="email">Email</label>
                            <input id="email" name="email" class="form-group">
                        </div>
                        <div class="form-group">
                            <label name="subject">subject</label>
                            <input id="subject" name="subject" class="form-group">
                        </div>
                        <div class="form-group">
                            <label name="message">message</label>
                            <textarea id="message" name="message" class="form-control">type message</textarea>
                        </div>

                        <input type="submit" value="Send Massage" class="btn btn-success" >

                    </form>
                </div>
            </div>
@endsection