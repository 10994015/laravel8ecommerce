<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
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
                                <a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">新增商品</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>圖片</th>
                                    <th>商品名稱</th>
                                    <th>存貨</th>
                                    <th>價錢</th>
                                    <th>促銷價</th>
                                    <th>分類</th>
                                    <th>時間</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock_status}}</td>
                                        <td>{{$product->regular_price}}</td>
                                        <td>{{$product->sale_price}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>{{$product->created_at}}</td>
                                        <td>
                                            <a href=" {{route('admin.editproduct', ['product_slug'=>$product->slug])}} "> <i class="fa fa-edit fa-2x text-info"></i> </a>
                                            <a href="#" wire:click.prevent="deleteProduct({{$product->id}})" stlye="margin-left:10px"> <i class="fa fa-times fa-2x text-danger"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
