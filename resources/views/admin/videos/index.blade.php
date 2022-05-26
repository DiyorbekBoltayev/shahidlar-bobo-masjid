@extends('admin.master')
@section('content')



    <div class=" container ">
        <h1 class="text text-center"> Barcha Videolar</h1>

        <a href="{{url('video/create')}}" class="btn btn-primary float-right mb-3"><i class="fas fa-plus"></i> Video qo'shish</a>

        <table class="table table-bordered border-primary ">
            <tr>

                <th class="" scope="col">#</th>
                <th class="" scope="col">Video name</th>
                <th class="" scope="col">Video</th>
                <th class="" scope="col">Amallar</th>

            </tr>
            @foreach($data as $d => $dat)

                <tr>
                    <td class="col-1">{{($data->currentpage()-1)*($data->perpage())+$d+1}}</td>
                    <td>{{$dat->name}}</td>
                    <td>
                        <iframe width="300" height="150" src="{{$dat->url}}" title="YouTube video player"
                                frameborder="0"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen>
                        </iframe>
                    </td>

                    <td>
                        <a href="{{ route('video.edit',$dat->id) }}">
                            <button class="btn btn-warning">Tahrirlash</button>
                        </a>

                        <a href="{{ route('video.destroy',$dat->id) }}">
                            <button class="btn btn-danger">O'chirish</button>
                        </a>

                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <br>
    </div>

    <div class="container">
        <div class="row justify-content-center">


            @if ($data->links())
                <div class="mt-4 p-4 box has-text-centered">
                    {{ $data->links() }}
                </div>
            @endif


        </div>
    </div>


@endsection
