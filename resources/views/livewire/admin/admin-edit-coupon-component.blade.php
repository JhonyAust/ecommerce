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
                                                    Edit Coupon
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">All Coupons</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                            @endif
                                            <form class="form-horizontal" wire:submit.prevent="updateCoupon">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Coupon Code</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Coupon Code" class="form-control input-md" wire:model="code"   required autofocus autocomplete="code"/>
                                                        @error('code') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Coupon Type</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control"  wire:model="type">
                                                            <option value="">Select</option>
                                                            <option value="fixed">Fixed</option>
                                                            <option value="percent">Percent</option>
                                                        </select>                                                        
                                                        @error('type') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Coupon Value</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Coupon Value" class="form-control input-md" wire:model="value" />
                                                        @error('value') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Cart Value</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Cart Value" class="form-control input-md" wire:model="cart_value" />
                                                        @error('cart_value') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Expiry Date</label>
                                                    <div class="col-md-4" wire:ignore>
                                                        <input type="text" id="expiry-date" placeholder="Expiry Date" class="form-control input-md" wire:model="expiry_date" />
                                                        @error('expiry_date') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
                                                        <button type="text"class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </form>

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
@push('scripts')
    <script>
        $(function(){
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD'
            })
            .on('dp.change',function(ev){
                var data =  $('#expiry-date').val();
                @this.set('expiry_date',data);
            });
        });
    </script>
@endpush