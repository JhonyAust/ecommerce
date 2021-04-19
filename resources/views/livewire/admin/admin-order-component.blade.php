<main id="main" class="main-site left-sitebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Admin</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div>
                        <style>
                            nav svg {
                                height: 20px;
                            }
                            nav .hidden{
                                display: block !important;
                            }

                        </style>
                        <div class="container" style="padding:30px 0; width:100%">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    All Orders
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>OrderID</th>
                                                        <th>Subtotal</th> 
                                                        <th>Discount</th>
                                                        <th>Tax</th>
                                                        <th>Total</th> 
                                                        <th>First Name</th> 
                                                        <th>Last Name</th>
                                                        <th>Mobile</th>  
                                                        <th>Email</th>
                                                        <th>Zipcode</th>
                                                        <th>Status</th>  
                                                        <th>Order Date</th>                                                         
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                        <tr>
                                                            <td>{{$order->id}}</td>                                   
                                                            <td>৳{{$order->subtotal}}</td>
                                                            <td>৳{{$order->discount}}</td>
                                                            <td>৳{{$order->tax}}</td>
                                                            <td>৳{{$order->total}}</td>
                                                            <td>{{$order->firstname}}</td>
                                                            <td>{{$order->lastname}}</td>
                                                            <td>{{$order->mobile}}</td>
                                                            <td>{{$order->email}}</td>
                                                            <td>{{$order->zipcode}}</td>
                                                            <td>{{$order->status}}</td>
                                                            <td>{{$order->created_at}}</td>
                                                           
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$orders->links()}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>

				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sidebar">
					<div class="widget mercado-widget categories-widget">
						<div class="widget-content">
							<ul class="list-category">
								<li class="category-item">
									<a href="{{route('admin.dashboard')}}" class="cate-link">Dashboard</a>
								</li>
								<li class="category-item">
									<a href="{{route('admin.categories')}}" class="cate-link">Categories</a>
								</li>
								<li class="category-item">
									<a href="{{route('admin.products')}}" class="cate-link">Products</a>
								</li>
                                <li class="category-item">
									<a href="{{route('admin.homeslider')}}" class="cate-link">Manage Slider</a>
								</li>
                                <li class="category-item">
                                <a href="{{route('admin.coupons')}}" class="cate-link">Coupons</a>
								</li>
                                <li class="category-item">
                                <a href="{{route('admin.orders')}}" class="cate-link">Orders</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>