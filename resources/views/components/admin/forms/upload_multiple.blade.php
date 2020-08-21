<div class="card">
    <div class="card-header">
        <h4>{{$options['label']}}</h4>
    </div>
    <div class="card-body">
        <div class="text-center">
            <a id="{{$options['real_name']}}" data-input="{{$options['real_name']}}-input"
               data-preview="{{$options['real_name']}}-holder"
               class="btn btn-rose text-white btn-block"
               data-form-handler="{{$options['real_name']}}-handler"
            >
                <i class="fa fa-plus"></i>
            </a>
            <input id="{{$options['real_name']}}-input" class="form-control" type="hidden"
                   name="{{$options['real_name']}}-holder" value="{{implode(',', $options['value'] ?? [])}}" multiple>
        </div>
        <img id="{{$options['real_name']}}-holder" style="margin-top:15px;max-height:100px;">
        <ul id="{{$options['real_name']}}-handler"></ul>
    </div>

</div>
