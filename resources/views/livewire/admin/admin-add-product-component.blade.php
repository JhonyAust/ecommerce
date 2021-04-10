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
                                                    Add New Product
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                            @endif
                                            <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Product Name</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name"  wire:keyup="generateSlug"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Product Slug</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Short Description</label>
                                                    <div class="col-md-4">
                                                        <textarea class="form-control" placeholder="Short Description" wire:model="short_description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Description</label>
                                                    <div class="col-md-4">
                                                        <textarea class="form-control" placeholder="Description" wire:model="description"></textarea>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Regular Price</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Sale Price</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">SKU</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Stock</label>
                                                    <div class="col-md-4">
                                                       <select class = "form-control" wire:model="stock_status">
                                                            <option value="instock">InStock</option>
                                                            <option value="outstock">OutStock</option>
                                                       
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Featured</label>
                                                    <div class="col-md-4">
                                                       <select class = "form-control" wire:model="featured">
                                                            <option value="0">No</option>
                                                            <option value="1">Yes</option>
                                                       </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Quantity</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Product Image</label>
                                                    <div class="col-md-4">
                                                        <input type="file" class="input-file" wire:model="image"/>
                                                        @if($image)
                                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Category</label>
                                                    <div class="col-md-4">
                                                       <select class = "form-control" wire:model="category_id">
                                                            <option value="">Select Category</option>

                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                            
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
									<a href="#" class="cate-link">Manage User</a>
								</li>
                                <li class="category-item">
									<a href="#" class="cate-link">Manage Homepage</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>