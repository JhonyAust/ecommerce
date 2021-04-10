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
                                                    Add New Category
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">All Category</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                            @endif
                                            <form class="form-horizontal" wire:submit.prevent="storecategory">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Category Name</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Category Name" class="form-control input-md" wire:model="name" wire:keyup="generateslug" :value="name" required autofocus autocomplete="name"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Category Slug</label>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug" :value="name" required autofocus autocomplete="slug"/>
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