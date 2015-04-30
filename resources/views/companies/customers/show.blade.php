@extends("layouts.company.master")
@section("customer")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
                <span class="lead">Showing one customer</span>
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
                        <th>Phone</th>
                        <th>Sec. Phone</th>
                        <th>Company id</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>001</td>
                        <td>Miroslav</td>
                        <td>Trninic</td>
                        <td>miroslav.trninic@gmail.com</td>
                        <td>00387 65 222 480</td>
                        <td>00387 65 427 014</td>
                        <td>426</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-xs">Edit</a>
                    </td>
                    </tr>
                    </tr>
                </table>


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
