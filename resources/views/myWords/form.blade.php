@if (count($errors) > 0)
<div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Word:</strong>
            <input type="text" name='word' placeholder='Word' class='form-control' />
        </div>
     </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Meaning:</strong>
            <input type='text' name='meaning' placeholder='Meaning' class='form-control'>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content:</strong>
            <textarea name='example' placeholder ='Example' class ='form-control' style='height:100px'></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
