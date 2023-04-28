<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="container mt-5 bg-secondary text-light text-center">
        <h3>게시판</h3>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10">
                <form action="/board/search" method="get" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" autocomplete="off" value="{{ old('search') }}">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">이름으로 검색</button>
                </form>
            </div>
            <div class="col-md-2">
                <a href="/board/create"><button type="button" class="btn btn-primary float-right">+ create Data</button></a>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">이름</th>
                    <th scope="col">직업</th>
                    <th scope="col">주소</th>
                    <th scope="col">내용</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lists as $list)
                <tr>
                    <td>{{$list->name}}</td>
                    <td>{{$list->job}}</td>
                    <td>{!! $list->address !!}</td>
                    <td>{!! $list->content !!}</td>
                    <td width="200px">
                        <a href="/board/edit/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="/board/delete/{{$list->id}}"><button type="button" class="btn btn-danger">Remove</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
        <div class="container mt-5">
            currentPage : {{ $lists->currentPage() }} <br/>
            total Data : {{ $lists->total() }} <br/>
            Data Per Page : {{ $lists->perPage() }} <br/>
        </div>

        <div class="container mt-3">
            {{ $lists->links() }}
        </div>

    </div>

    {{-- @include('sweetalert::alert') --}}

</body>
</html>