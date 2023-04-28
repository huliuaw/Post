<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>데이터 저장</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="container mt-5 bg-secondary text-light text-center">
        <h3>데이터 저장</h3>
    </nav>

    <div class="container">
        <form action="/board/store" method="post" name="store">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">이름</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="이름 입력" autocomplete="off" autofocus>
            </div>
            <div class="form-group">
                <label for="job">직업</label>
                <input type="text" class="form-control" id="job" name="job" placeholder="직업 입력" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="address">주소</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="주소 입력">
            </div>
            <div class="form-group">
                <label for="content">내용</label>
                <textarea class="form-control" id="content" name="content" rows="3"></textarea>
            </div>
            <button type="button" id="btn" class="btn btn-primary float-right">전송</button>
        </form>
    </div>
    <script>
        document.querySelector('#btn').addEventListener("click", () => {
            document.store.submit();
            alert("store 성공했습니다.");
        })
    </script>
</body>
</html>