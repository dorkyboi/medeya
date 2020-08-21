<div class="fileinput text-center {{ isset($options['value']) ? 'fileinput-exists' : 'fileinput-new' }}" data-provides="fileinput" data-name="{{$options['real_name']}}_old">
    <div class="fileinput-new thumbnail img-raised">
        <img src="https://via.placeholder.com/500/CCCCCC/FFFFFF?Text=Obrazek"
             alt="{{$options['label']}}">
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail img-raised">
        @if(isset($options['value']))
            <img src="{{'/' .$options['value']}}" alt="">
        @endif
    </div>
    <div>
    	<span class="btn btn-raised btn-round btn-rose btn-file">
    	   <span class="fileinput-new">{{$options['label']}}</span>
    	   <span class="fileinput-exists">{{ __('generic.edit') }}</span>
            @if($options['value'])
                <input type="file" name="{{$options['real_name']}}_old"  value="{{$options['value']}}" />
            @endif
    	   <input type="file" name="{{$options['real_name']}}" value="{{$options['value']}}" />
    	</span>
        <a href="#{{$options['real_name']}}_old" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
            <i class="fa fa-times"></i> {{ __('generic.delete') }}
        </a>
    </div>
</div>
