<main id="main" class="main-site left-sitebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">home</a></li>
					<li class="item-link"><span>Admin</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div>
                        <div class="container" style="padding:30px 0; width:98%">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    All Coupons
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Add New</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                            @endif
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Coupon Code</th>
                                                        <th>Coupon Type</th> 
                                                        <th>Coupon Value</th> 
                                                        <th>Cart Value</th>
                                                        <th>Expiry Date</th>  
                                                        <th>Action</th>                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($coupons as $coupon)
                                                        <tr>
                                                            <td>{{$coupon->id}}</td>
                                                            <td>{{$coupon->code}}</td>
                                                            <td>{{$coupon->type}}</td>
                                                            @if($coupon->type == 'fixed')
                                                                <td>{{$coupon->value}}</td>
                                                            @else
                                                                <td>{{$coupon->value}} %</td>
                                                            @endif
                                                        
                                                            <td>{{$coupon->cart_value}}</td>
                                                            <td>{{$coupon->expiry_date}}</td>
                                                            <td>
                                                                <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" > <i class="fa fa-edit fa-2x"></i></a>
                                                                <a href="#" onclick="confirm('Are you sure, You want to delete this coupon?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{$coupon->id}})" style="margin-left: 10px;"> <i class="fa fa-times fa-2x text-danger"></i></a> 
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>                   
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