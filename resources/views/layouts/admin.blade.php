<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/fonts.css">
    <script src="https://kit.fontawesome.com/7914904a7d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body >
    <div class="row justify-content-center py-5" style="margin: 0px">
        <div class="col-12 col-lg-3 shadow-sm p-4">
            <a href="/admin">
                <img src="/images/logo.png" alt="logo" style="width: 100%">
            </a>
        <div class="row py-5">
        
        <a href="{{url('/admin/about')}}" class="col-12 py-2 ">
            About
        </a>
        <a href="{{url("admin/pricing")}}"  class="col-12 py-2">
            Pricing
        </a>
        <a href="{{url('/admin/faq')}}"  class="col-12 py-2">
            FAQ
        </a>
    </div>
    </div>
        <div class="col-12 col-lg-8">
            @yield("content")
        </div>
    </div>
</body>
</html>