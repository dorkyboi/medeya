<div style="width: 20rem" data-file-upload="single">
    <h4>
        <label for="{{ $options['real_name'] }}">{{ $options['label'] }}</label>
    </h4>
    <div class="card mt-0">
        <img
            class="card-img-top"
            src="{{ $options['value'] ?? 'https://via.placeholder.com/500/CCCCCC/FFFFFF?Text=Obrazek' }}"
            alt="{{ $options['real_name'] }}"
            data-file-upload="preview"
        />
        <div class="card-body">
            <input
                id="{{ $options['real_name'] }}"
                class="form-control"
                name="{{ $options['real_name'] }}"
                value="{{ $options['value'] }}"
                data-file-upload="input"
            />
            <a class="btn btn-rose text-white btn-block" data-file-upload="button">
                <i class="fas fa-image"></i>
                @lang('Select image')
            </a>
        </div>
    </div>
</div>
