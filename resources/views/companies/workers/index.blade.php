@extends("layouts.company.master")
@section("workers")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
    @include("_partials.messages")
              <!--state overview start-->
                <span class="lead customers-panel-heading">Workers</span>
                <form class="form-inline" style="float:right;margin-right:15px;margin-top:-10px">
                    <input type="text" name="search" class="form-control" placeholder="fuzzy search"></input>
                </form>
              <div class="row state-overview">
            <section class="panel">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($workers as $worker)
                    <tr>
                        <td>{!!$worker["id"]!!}</td>
                        <td>{!!$worker["first_name"]!!}</td>
                        <td>{!!$worker["last_name"]!!}</td>
                        <td>{!!$worker["email"]!!}</td>
                    <td>
                        <a href="/companies/{!!$company_name!!}/workers/{!!$worker["first_name"]!!}/update" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                    </tr>
                @endforeach

                    </tbody>

                </table>
<hr>
                <a href="/companies/{!!$company_name!!}/workers/create" class="btn btn-success" style="margin-left:40%">Create new worker</a>
<hr>


            </section>
            </section>
        



      <!--footer start-->
      <footer class="site-footer navbar-fixed-bottom" style="z-index:-10">
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
