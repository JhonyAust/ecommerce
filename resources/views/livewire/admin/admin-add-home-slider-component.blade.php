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
                        <style>
                            nav svg {
                                height: 20px;
                            }
                            nav .hidden{
                                display: block !important;
                            }

                        </style>
                        <div class="container" style="padding:30px 0; width:98%">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Add New Slide
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All Slides</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                            @endif
                                            <form class="form-horizontal"  wire:submit.prevent="addSlide">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Title</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Title" class="form-control input-md" wire:model="title" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Subtitle</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Subtitle" class="form-control input-md" wire:model="subtitle"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Price</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control input-md" placeholder="Price" wire:model="price"></input>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Link</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control input-md" placeholder="Link" wire:model="link"></input>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Image</label>
                                                    <div class="col-md-4">
                                                        <input type="file" class="input-file" wire:model="image"/>
                                                        @if($image)
                                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                                        @else
                                                            <img src="{{ asset('assets/images/sliders')}}/{{$image}}" width="120" />
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Status</label>
                                                    <div class="col-md-4">
                                                       <select class = "form-control" wire:model="status">
                                                            <option value="0">Inactive</option>
                                                            <option value="1">Active</option>    
                                                       </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label"></label>
                                                    <div class="col-md-4">
                                                        <button type="text"class="btn btn-primary">Submit</button>
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