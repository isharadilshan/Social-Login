@extends('layouts.app')

@section('content')
<div class="container">

    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <script>
        FB.init({
            appId  : 'YOUR APP ID',
            status : true, 
            cookie : true, 
            xfbml  : true  
        });
    </script>

    <div id="container_notlike">
    YOU DONT LIKE
    </div>

    <div id="container_like">
    YOU LIKE
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div class="card-body">
                    <a class="btn btn-link" href="{{ route('enroll') }}">
                        {{ __('Enroll') }}
                    </a>
                </div>

                <!-- <div class="card-body">
                    <div class="fb-page" data-href="https://www.facebook.com/Back-End-Developer-325579044730857/" data-tabs="timeline" data-width="400" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/Back-End-Developer-325579044730857/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/Back-End-Developer-325579044730857/">Back-End Developer</a>
                        </blockquote>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){

FB.login(function(response) {
  if (response.session) {

      var user_id = response.session.uid;
      var page_id = "40796308305"; //coca cola
      var fql_query = "SELECT uid FROM page_fan WHERE page_id = "+page_id+"and uid="+user_id;
      var the_query = FB.Data.query(fql_query);

      the_query.wait(function(rows) {

          if (rows.length == 1 && rows[0].uid == user_id) {
              $("#container_like").show();

              //here you could also do some ajax and get the content for a "liker" instead of simply showing a hidden div in the page.

          } else {
              $("#container_notlike").show();
              //and here you could get the content for a non liker in ajax...
          }
      });


  } else {
    // user is not logged in
  }
});

});</script>
</div>
@endsection
