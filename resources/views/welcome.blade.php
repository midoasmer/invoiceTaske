<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class="antialiased">
<div class="card" style="width: 50%;margin-left: 25%;margin-top:5%;">
    <h5 class="card-header">Simplified tax invoice</h5>
    <div class="card-body">
        <form id="actionForm" action="{{route('invoice')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="mb-3">
                <label for="seller_name" class="form-label">Seller Name</label>
                <input type="text" class="form-control" id="seller_name" name="seller_name" required>
            </div>
            <div class="mb-3">
                <label for="vat_num" class="form-label">VAT Registration Number</label>
                <input type="number" class="form-control" id="vat_num" name="vat_num" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Invoice Time</label>
                <input type="datetime-local" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="invoice_total" class="form-label">Invoice Total (with VAT)</label>
                <input type="text" class="form-control" id="invoice_total" name="invoice_total" required>
            </div>
            <div class="mb-3">
                <label for="vat" class="form-label">Total VAT</label>
                <input type="text" class="form-control" id="vat" name="vat" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

{{--    <div class="container mt-4">--}}

{{--        <div class="card">--}}
{{--            <div class="card-header">--}}
{{--                <h2>Simple QR Code</h2>--}}
{{--            </div>--}}
{{--            <div class="card-body">--}}
{{--                {!! QrCode::size(300)->generate('ARdBaG1lZCBNb2hhbWVkIEFMIEFobWFkeQIPMzAwMDc1NTg4NzAwMDAzAxQyMDIyLTAzLTEzVDE0OjQwOjQwWgQHMTEwOC45MAUFMTQ0LjkGLHQxdkVibE90TWs0RTMrWUZvZkw0cll3OEFScXZ1dkE1YVFZVnc2d1MzQkE9B2BNRVFDSUZXUG1mVlI0dkk1d3pEZkwxRXdyTFdFdlBFUHFseFdLQnp2UnR5ZDRuOERBaUEzVEozNFdTcU1BYWJQNE9keHBtaXdSMHNxdVpXYTlXYzBXc2JjUUR0SHBRPT0IWDBWMBAGByqGSM49AgEGBSuBBAAKA0IABEdifjdJ03b3+M0dTPofZCRfBK+8Gdbsnhw4TNmEqacHGTtrSNaba3UVrzamOy7hWZL2gUFQ92NuYweGxhoiuY4=') !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
{{--<script>--}}
{{--    function getFileData() {--}}
{{--        var fileName = document.getElementById('file').files[0].name;//get fail name--}}
{{--        var fileSize = document.getElementById('file').files[0].size;//get file size--}}
{{--        var ext = fileName.substring(fileName.lastIndexOf('.') + 1);//get file ext--}}
{{--        //show file data to user--}}
{{--        document.getElementById('fileName').innerHTML = fileName;--}}
{{--        document.getElementById('fileType').innerHTML = ext;--}}
{{--        document.getElementById('fileSize').innerHTML = fileSize;--}}
{{--        document.getElementById('fileType').style.color = "red";--}}
{{--        document.getElementById('fileSize').style.color = "red";--}}
{{--        document.getElementById('fileName').style.color = "red";--}}
{{--    }--}}
{{--</script>--}}
</body>
</html>
