@extends('welcome')

@section('contentHome')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
            <img src="/img/contact12.png" alt="img" class="img-responsive">
        <form class="form-horizontal" id="contactForm" method="post" action="{{route('storeContact')}}">
            {{ csrf_field() }}
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name"  name="name" placeholder="Enter your Name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="subject">Subject:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="subject"  name="subject" placeholder="Enter Subject" >
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="text">Text:</label>
                <div class="col-sm-10">
                    <textarea name="text" id="text" class="form-control" cols="30" rows="10" placeholder="your mail here!"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit"  id="submintRequest" class="btn btn-info">Submit</button>
                </div>
            </div>
        </form>

    </div>
    <div class="col-md-2"></div>
</div>
<script>

</script>
@endsection






