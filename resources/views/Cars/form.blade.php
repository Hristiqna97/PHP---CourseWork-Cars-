<div class="row">
    <input type="hidden" name="ïd" value="{{$car->id}}" />
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong style="text-align: center;color:brown;">Име на автомобила:</strong>
           <input type="text" name="name" value="{{$car->name}}"/>
        </div>
    </div>

        <div class="form-group col-md-4">
            <strong style="color:brown;">Модел:</strong>
            <input type="text" name="name" value="{{$car->models}}"/>
        </div>

        <div class="form-group col-md-3">
            <strong style="color:brown;">Година:</strong>
            <input type="text" name="name" value="{{$car->year}}"/>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary "  >Запази</button>
    </div>
</div>