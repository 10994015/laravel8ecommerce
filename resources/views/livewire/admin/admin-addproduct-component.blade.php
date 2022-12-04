<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                新增商品
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">所有商品</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent='addproduct'>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品名稱</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="商品名稱" class="form-control input-md" wire:model="name" wire:keyup='genereateslug' />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品網址</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="商品網址" class="form-control input-md" wire:model="slug" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品簡短描述</label>
                                <div class="col-md-4">
                                    <textarea name="" class="form-control" placeholder="商品簡短描述" wire:model="short_description" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品描述</label>
                                <div class="col-md-4">
                                    <textarea name="" class="form-control" placeholder="商品描述" wire:model="description" ></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品價格</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="商品價格" class="form-control input-md" wire:model="regular_price" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品售價</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="商品售價" class="form-control input-md" wire:model="sale_price" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品貨號(SKU)</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="商品貨號(SKU)" class="form-control input-md" wire:model="SKU" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">存貨狀態</label>
                                <div class="col-md-4">
                                    <select name="" class="form-control" wire:model="stock_status">
                                        <option value="instock">有存貨</option>
                                        <option value="outofstock">暫無存貨</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">是否為特色商品</label>
                                <div class="col-md-4">
                                    <select name="" class="form-control" wire:model="featured">
                                        <option value="0">NO</option>
                                        <option value="1">YES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品數量</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="商品數量" class="form-control input-md" wire:model="quantity" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品圖片</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file" wire:model="image" />
                                    @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" width="120">
                                @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">商品分類</label>
                                <div class="col-md-4">
                                    <select name="" class="form-control" wire:model="category_id" >
                                        <option value="">選擇分類</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}"> {{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">新增</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
