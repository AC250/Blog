 
@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <table>
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                        
                                                        
                            @foreach($posts as $post)
                            <tr>
                       <th>{{$post->title}}</th>
                       <th><a href="/posts/{{$post->id}}/edit">Edit</a></th>
                       <th>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::submit('Delete')}}
                        {!!Form::close()!!}

                       </th>
                            </tr>     
                       @endforeach
                       
                    
                    
                    


                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
