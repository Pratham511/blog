<html>
<head>
    <title>Laravel 8 PDF File Download using JQuery Ajax Request Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
    h2{
        text-align: center;
        font-size:22px;
        margin-bottom:50px;
    }
    body{
        background:#f2f2f2;
    }
    .section{
        margin-top:30px;
        padding:50px;
        background:#fff;
    }
    .pdf-btn{
        margin-top:30px;
    }
</style>
<body>
	<div class="container">
        <div class="col-md-8 section offset-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="panel-body">
                    <div class="main-div">
                            {{ $post->body }}
                        <br>
                        <br>
                        <img src="{{public_path('images').'/'. $post->image}}"  width="350px" height="350px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
