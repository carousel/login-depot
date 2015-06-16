@extends("layouts.company.master")
@section("customers")
    @include("_partials.messages")
    <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
              <div class="row state-overview">
            <section>
                <table class="datatable" class="table table-hover display" callspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Quote Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Modified At</th>
                            <th>Status</th>
                            <th>Edit/View</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Quote Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Modified At</th>
                            <th>Status</th>
                            <th>Edit/View</th>
                        </tr>
                    </tfoot>
                    <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{!!$customer["quote_id"]!!}</td>
                        <td>{!!$customer["name"]!!}</td>
                        <td>{!!$customer["phone"]!!}</td>
                        <td>{!!$customer["email"]!!}</td>
                        <td>{!!$customer["modified_at"]!!}</td>
                            @if($customer["status"] == "saved")
                                <td><button class="btn btn-primary btn-xs">{!!$customer["status"]!!}</button></td>
                            @endif
                            @if($customer["status"] == "pending")
                                <td><button class="btn btn-info btn-xs">{!!$customer["status"]!!}</button></td>
                            @endif
                            @if($customer["status"] == "accepted")
                                <td><button class="btn btn-success btn-xs">{!!$customer["status"]!!}</button></td>
                            @endif
                            @if($customer["status"] == "posted")
                                <td><button class="btn btn-default btn-xs">{!!$customer["status"]!!}</button></td>
                            @endif
                            @if($customer["status"] == "closed")
                                <td><button class="btn btn-warning btn-xs">{!!$customer["status"]!!}</button></td>
                            @endif
                            @if($customer["status"] == "canceled")
                                <td><button class="btn btn-danger btn-xs">{!!$customer["status"]!!}</button></td>
                            @endif
                    <td>
                        <a href="/companies/{!!$company_name!!}/orders/{!!$customer["order_id"]!!}/edit">Edit</a>
                    </td>
                    </tr>
                @endforeach

                    </tbody>

                </table>
<hr>
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
