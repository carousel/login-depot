@extends("layouts.company.master")
@section("quote")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
@include("_partials.errors")
              <!--state overview start-->
                <span class="lead">Create New Quote</span>
                <form class="form-inline" style="float:right;margin-right:15px;margin-top:-10px">
                    <input type="text" name="search" class="form-control" placeholder="fuzzy search"></input>
                </form>
              <div class="row state-overview">
<br>
            <section class="panel col-md-12  profile-forms">
<br>
                {!!Form::open(["url"=>"/companies/" . $company . "/quotes/create","method"=>"POST","class" => "form-inline","role"=>"form"])!!}
                    <div class="form-group">
                        {!!Form::label("year")!!}
                        {!!Form::selectRange("year",1999,2015,[],["class" => "form-control"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("make")!!}
                        {!!Form::select("make",["make-list"=> "make-list"],[],["class" => "form-control"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("model")!!}
                        {!!Form::select("model",[],[],["class" => "form-control"])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label("type")!!}
                        {!!Form::select("type",[],[],["class" => "form-control"])!!}
                    </div>
<br>
                    {!!Form::submit("submit",["class" => "btn btn-success pull-right"])!!}
                {!!Form::close()!!}
<br>

            </section>
            </section>
        



      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 &copy; LoginDepot.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
@stop
