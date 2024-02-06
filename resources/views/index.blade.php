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
                                <h3 class="card-title cus_title">All Data</h3>
                                <a href="{{ route('add.data') }}" class="btn btn-sm btn-info cus_btn">Add Data</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($data as $key=>$item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                <a href="{{ route('edit.data',$item->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                <a href="{{ route('delete.data',$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @empty
                                            <p class="text-center text-danger">Data is not available Right Now!</p>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
