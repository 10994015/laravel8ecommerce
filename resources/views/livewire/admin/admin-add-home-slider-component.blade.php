<div>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                新增輪播圖片
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">所有輪播圖</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                       <form action="" class="form-horizontal" wire:submit.prevent='addSlider'>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">標題</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="標題" class="form-control input-md" wire:model='title' />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">副標題</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="副標題" class="form-control input-md" wire:model='subtitle' />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">價格</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="價格" class="form-control input-md" wire:model='price' />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">連結</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="連結" class="form-control input-md" wire:model='link' />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">圖片</label>
                                <div class="col-md-4">
                                    <input type="file"  class="input-file" wire:model='image' /> 
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">狀態</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model='status' >
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
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
