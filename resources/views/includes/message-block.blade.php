 @if(count($errors) >0)
 <div class="row">
   <div class="col-md-4 col-md-offset-4">
          <ul>
        @foreach($errors->all() as $error)
          <li>
            <div class = "alert alert-danger alert-dismissable">
             <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                &times;
             </button>
            {{ $error }}
            </div>
          </li>
        @endforeach
    </ul>
   </div>
 </div>

@endif

@if(Session::has('post_message'))
   <div class="row">
   <div class="col-md-4 col-md-offset-4">
          {{ Session::get('post_message') }}
   </div>
 </div>
@endif