@extends('layouts.userlayout')

@section('right-sidebar')


<section id="content">

        <!--breadcrumbs start-->
        
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">


            <!-- Form with icon prefixes -->
            <div class="row">
              
              <!-- Form with validation -->
              <div class="col s12 m12 l6">
                <div class="card-panel">
                  <h4 class="header2">Add buyer</h4>
                  <div class="row">
                    <form class="col s12" method="post" action="{{ route('buyers.postcreatewithfile') }}" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="row">
                        
                      	@if (count($errors) > 0)
          						    <div class="alert alert-danger">
          						        <ul>
          						            @foreach ($errors->all() as $error)
          						                <li>{{ $error }}</li>
          						            @endforeach
          						        </ul>
          						    </div>
          						@endif

                        <div class="input-field col s12">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input id="name4"  name="blist" type="file" class="validate">
                          
                        </div>
                      </div>

                      


                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>


                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection

