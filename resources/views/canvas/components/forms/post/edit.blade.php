<form role="form" id="form-edit" method="POST" action="{{ route('canvas.post.update', $data['post']->id) }}">
    @method('PUT')
    @csrf

    <div class="form-group row my-5">
        <div class="col-lg-12">
            <input type="text"
                   class="form-control-lg form-control{{ $errors->has('title') ? ' is-invalid' : '' }} border-0"
                   name="title"
                   title="Title" value="{{ $data['post']->title }}" required placeholder="Post Title">
            @if ($errors->has('title'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('title') }}</strong>
                </div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-12">
                    <textarea class="form-control-lg form-control{{ $errors->has('body') ? ' is-invalid' : '' }} border-0"
                            name="body" id="body"
                            cols="30" rows="10"
                            placeholder="Tell your story..">{{ $data['post']->body }}</textarea>
            @if ($errors->has('body'))
                <div class="invalid-feedback">
                    <strong>{{ $errors->first('body') }}</strong>
                </div>
            @endif
        </div>
    </div>
    @include('canvas::canvas.components.modals.post.edit.details')
    @include('canvas::canvas.components.modals.post.edit.publish')
    @include('canvas::canvas.components.modals.post.edit.image')
</form>