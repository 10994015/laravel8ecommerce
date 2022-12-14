<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                所有商品
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addhomeslider')}}" class="btn btn-success pull-right">新增輪播圖</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                       <table class="table  table-striped">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>圖片</td>
                                    <td>標題</td>
                                    <td>副標題</td>
                                    <td>價格</td>
                                    <td>連結</td>
                                    <td>狀態</td>
                                    <td>上傳時間</td>
                                    <td>操作</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{$slider->id}}</td>
                                        <td><img src="{{asset('assets/images/sliders')}}/{{$slider->image}}" width="120"></td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->subtitle}}</td>
                                        <td>{{$slider->price}}</td>
                                        <td>{{$slider->link}}</td>
                                        <td>{{$slider->status == 1 ? 'Active' : 'Inactive'}}</td>
                                        <td>{{$slider->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.edithomeslider', ['slider_id'=>$slider->id])}}"> <i class="fa fa-edit fa-2x" class="text-info"></i> </a>
                                            <a href="#" wire:click.prevent="deleteSlider({{$slider->id}})" style="margin-left: 10px"> <i class="fa fa-times fa-2x text-danger"></i> </a>
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
