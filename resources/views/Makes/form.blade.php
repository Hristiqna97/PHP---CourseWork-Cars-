<div class="row">
    <input type="hidden" name="ïd" value="{{$model->id}}" />
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong style="text-align: center;color:brown;">Име:</strong>
            <input type="text" name="name" value="{{$make->name}}"/>
        </div>
    </div>

    <div class="form-group col-md-4">
        <strong style="color:brown;">godina:</strong>
        <input type="text" name="year" value="{{$make->year}}"/>
    </div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary "  >Запази</button>
</div>