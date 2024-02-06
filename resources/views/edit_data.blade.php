<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Crud</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .cus_btn {
            margin-bottom: 13px !important;
            margin-top: 14px;
            font-size: 18px;
            padding: 7px 17px;
            color: #fff;
        }

        .cus_title {
            margin-top: 17px;
            font-size: 30px;
            font-family: arial;
            font-weight: bolder;
        }
    </style>
</head>

<body>
    <section class="main__section">
        <div class="container">
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="shadow">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title cus_title">Edit Data</h3>
                                <a href="{{ route('index') }}" class="btn btn-sm btn-info cus_btn">All Data</a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('update.data', $data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group my-3">
                                        <label for="name">Write Your Name</label>
                                        <input type="text" name="name" id="name" class="form-control mt-2" value="{{ $data->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Write Your Email</label>
                                        <input type="text" name="email" id="email" class="form-control mt-2" value="{{ $data->email }}">
                                    </div>
                                    <div class="form-group mt-3">
                                        <button class="btn btn-sm btn-info">Edit Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
