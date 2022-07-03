

<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <title>لیست مخاطبین</title>
    <meta name="description" content="دفترچه تلفن">
    <meta name="keywords" content="شماهره, کانتکت, مخاطب">
    <meta name="author" content="Alireza Gholamrezaei">
</head>

<body>

<div class="container">
    <!-- منو -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">لیست مخاطبین</a>

            <!-- <img src="img/logo.png" alt="" width="30" height="24"> -->


        </div>
    </nav>

    <!-- ثبت مخاطب جدید -->
    <div class="row ">
        <div class="col-lg-2 mx-lg-4 col-md-6 col-sm-6 col-6 mt-3">
            <!-- Button trigger modal -->
            <button type="button" id="btn_add" class="btn btn-primary p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                مخاطب جدید <i class="fas fa-plus"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">پیام جدید</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="New-user">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">نام</label>
                                    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> نام خانوادگی</label>
                                    <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> موبایل</label>
                                    <input type="number" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> ایمیل</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"> تاریخ تولد</label>
                                    <input type="date" name="birthday" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="inputGroupFileAddon04" class="form-label"> عکس</label>
                                    <input type="file" name="img" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-lg-2 col-md-6 col-sm-6 col-6 mt-3">
            <form action="del-all" method="post">
                <button type="submit"   id="btn_delete" class="btn btn-danger ">پاک کردن  <i class="fas fa-trash"></i></button>

            </form>
        </div>

    </div>


    <!-- جدول مخاطبین -->
    <div class="col-12">
        <div class="table-responsive">
            <table class="table list-table table-light table-nowrap align-middle table-borderless">
                <thead>
                <tr>
                    <th scope="col" class="ps-4" style="width: 50px;">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck">
                            <label class="form-check-label" for="contacusercheck"></label>
                        </div>
                    </th>
                    <th scope="col" style="width: 50px;">#</th>
                    <th scope="col">نام و نام خانوادگی</th>
                    <th scope="col">ایمیل</th>
                    <th scope="col">موبایل</th>
                    <th scope="col" style="width: 150px;">ویرایش</th>
                </tr>
                </thead>


                <tbody>
                <?php $i = 1 ?>

                @foreach($specs as $spec)

                <tr class=" mt-2">
                    <th scope="row" class="ps-4">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        {{ $i++ }}
                    </td>
                    <td>
                        <img src="img/acc.png " alt="" class="rounded-circle me-2">

                        <!-- Button trigger modal -->
                        <button type="button" id="btn_user" class="btn btn-transparent " data-bs-toggle="modal" data-bs-target="#exampleModal1">

                            {{$spec->firstname}}
                            {{$spec->lastname}}

                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">مشخصات مخاطب</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card d-flex flex-column align-items-center" id="exampleModal1">
                                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                                            <img src="img/acc.png " style="width: 90px;" alt="" class=" rounded-circle me-2">
                                            <div class="card-body">
                                                <h6 class="card-title">
                                                    نام :

                                                    {{$spec->firstname}}

                                                </h6>
                                            </div>

                                            <div class="card-body">
                                                <h6 class="card-title">
                                                    نام خانوادگی :

                                                    {{$spec->lastname}}

                                                </h6>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item border-0"><i class="fas fa-at"></i> ایمیل : {{$spec->email}}</li>
                                                <li class="list-group-item border-0"><i class="fas fa-phone"></i>{{$spec->mobile}}</li>
                                                <li class="list-group-item border-0"><i class="fas fa-birthday-cake"></i> تاریخ تولد : {{$spec->birthday}}</li>
                                            </ul>

                                        </div>
                                    </div>

                    </td>
                    <td>
                        {{$spec->email}}

                    </td>
                    <td>{{$spec->mobile}}</td>
                    <td>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-primary" data-bs-original-title="Edit" aria-label="Edit"><i class="far fa-edit fa-lg "></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-danger" data-bs-original-title="Delete" aria-label="Delete"><i class="far fa-trash fa-lg "></i> </a>
                            </li>

                        </ul>
                    </td>
                </tr>
                @endforeach

                </tbody>

            </table>
        </div>
    </div>


</div>


<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>

</html>
