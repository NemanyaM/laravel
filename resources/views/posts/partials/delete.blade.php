<form action="{{ url('/posts/'.$post->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button>Delete</button>
            </form>
