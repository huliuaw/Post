<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>수정 폼</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- 경로 public --}}
</head>
<body>
    <nav class="container mt-5 bg-secondary text-light text-center">
        <h3>EDIT DATA</h3>
    </nav>

    <div class="container mt-4">
        <a href="/board"><button type="button" class="btn btn-warning">Back</button></a>
    </div>

    <div class="container">
        @foreach($edits as $edit)
            <form action="/board/update" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{$edit->id}}"></input>
                </div>
                <div class="form-group">
                    <label for="name">이름</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="이름" autocomplete="off" autofocus value="{{$edit->name}}">
                </div>
                <div class="form-group">
                    <label for="job">직업</label>
                    <input type="text" class="form-control" id="job" name="job" placeholder="직업" autocomplete="off" value="{{$edit->job}}">
                </div>
                <div class="form-group">
                    <label for="address">주소</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="주소" value="{{$edit->address}}">
                </div>
                <div class="form-group">
                    <label for="content">내용</label>
                    <textarea class="form-control" id="content" name="content" rows="3">{{$edit->content}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right">수정</button>
            </form>
        @endforeach
    </div>
</body>
</html>