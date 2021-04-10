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
                                                    All Categories
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
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
                                                        <th>Category Name</th> 
                                                        <th>Slug</th> 
                                                        <th>Action</th>                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($categories as $category)
                                                        <tr>
                                                            <td>{{$category->id}}</td>
                                                            <td>{{$category->name}}</td>
                                                            <td>{{$category->slug}}</td>
                                                            <td>
                                                                <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}" > <i class="fa fa-edit fa-2x"></i></a>
                                                                <a href="#" wire:click.prevent="deleteCategory({{$category->id}})" style="margin-left: 10px;"> <i class="fa fa-times fa-2x text-danger"></i></a> 
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$categories->links()}}
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
									<a href="#" class="cate-link">Manage Homepage</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>