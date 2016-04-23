                <form action="{{ $actionUrl }}" method="POST">
                    {{ method_field($method) }}
                    {{ csrf_field() }}

                    <input type="text" name="title" value="{{ $post->title }}"/>
                    <textarea type="text" name="body">{{ $post->body }}</textarea>
                    <input type="submit" value="{{ $buttonTitle }}" />
                </form>
