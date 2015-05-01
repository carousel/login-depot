@extends("layouts.company.master")
@section("customers")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
                <span class="lead">Customers</span>
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
                    <tr>
                        <td>001</td>
                        <td>Miroslav</td>
                        <td>Trninic</td>
                        <td>miroslav.trninic@gmail.com</td>
                    <td>
                        <a href="/companies/{!!$name!!}/customers/{!!$id!!}" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Miroslav</td>
                        <td>Trninic</td>
                        <td>miroslav.trninic@gmail.com</td>
                    <td>
                        <a href="/companies/{!!$name!!}/customers/{!!$id!!}" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                    </tr>
                    </tbody>
                    <tr>
                        <td>001</td>
                        <td>Miroslav</td>
                        <td>Trninic</td>
                        <td>miroslav.trninic@gmail.com</td>
                    <td>
                        <a href="/companies/{!!$name!!}/customers/{!!$id!!}" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Miroslav</td>
                        <td>Trninic</td>
                        <td>miroslav.trninic@gmail.com</td>
                    <td>
                        <a href="/companies/{!!$name!!}/customers/{!!$id!!}" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Miroslav</td>
                        <td>Trninic</td>
                        <td>miroslav.trninic@gmail.com</td>
                    <td>
                        <a href="/companies/{!!$name!!}/customers/{!!$id!!}" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Miroslav</td>
                        <td>Trninic</td>
                        <td>miroslav.trninic@gmail.com</td>
                    <td>
                        <a href="/companies/{!!$name!!}/customers/{!!$id!!}" class="btn btn-primary btn-xs">Edit</a>
                    </td>
                    </tr>
                </table>


<br>
                <a href="#" class="btn btn-success" style="margin-left:40%">Create new customer</a>
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
