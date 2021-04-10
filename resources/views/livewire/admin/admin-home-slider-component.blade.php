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
                                                    All Slides
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">Add New</a>
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
                                                        <th>Image</th> 
                                                        <th>Title</th>
                                                        <th>Subtitle</th>
                                                        <th>Price</th> 
                                                        <th>Link</th>
                                                        <th>Status</th>
                                                        <th>Date</th>  
                                                        <th>Action</th>                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($sliders as $slider)
                                                        <tr>
                                                            <td>{{$slider->id}}</td>
                                                            <td><img src="{{ asset('assets/images/sliders')}}/{{$slider->image}}" width="120"/></td>
                                                            <td>{{$slider->title}}</td>
                                                            <td>{{$slider->subtitle}}</td>
                                                            <td>{{$slider->price}}</td>
                                                            <td>{{$slider->link}}</td>
                                                            <td>{{$slider->status == 1 ? 'Active':'Inactive'}}</td>
                                                            <td>{{$slider->created_at}}</td>
                                                            <td>
                                                                <a href="{{route('admin.edithomeslider',['slide_id'=>$slider->id])}}"> <i class="fa fa-edit fa-2x text-info"></i></a>
                                                                <a href="#" wire:click.prevent="deleteSlider({{$slider->id}})" style="margin-left: 10px;"> <i class="fa fa-times fa-2x text-danger"></i></a> 
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
									<a href="#" class="cate-link">Manage Homepage</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>