@extends('layout')
@section('site_title', 'محصولات')

@section('site_css_files')
    <link rel="stylesheet" href="/css/font.css" />
    <link rel="stylesheet" href="/css/products_show.css" />
@endsection

@section('site_content')
    <div class="w-100 row mx-0 product_cnt"></div>

    <hr class="my-5">

    <h5 class="mb-1 text-center">لطفا نظر خود را برای ما به اشتراک بگذارید</h5>
    <p class="mb-5 text-center font-weight-light">نظر شما ارزشمند است</p>
    <form class="row mb-5 px-0 post-comment" action="javascript:void(0)" method="POST">
        <div class="form-group col-6">
            <label>پروفایل:</label>
            <input name="avatar" id="avatar" type="file" accept="image/*" class="form-control"
                placeholder="عکس پروفایل خود را وارد کنید">
        </div>
        <div class="form-group col-6">
            <label>نام و نام‌خانوادگی:</label>
            <input name="name" id="name" type="text" class="form-control"
                placeholder="نام و نام‌خانوادگی خود را وارد کنید">
        </div>
        <div class="form-group col-6">
            <label>ایمیل:</label>
            <input name="email" id="email" type="email" class="form-control" placeholder="name@example.com">
        </div>
        <div class="form-group col-6">
            <label>امتیاز شما به محصول:</label>
            <select name="score" id="score" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleFormControlTextarea1">نظر شما:</label>
            <textarea name="comment" id="comment" class="form-control"
                placeholder="نظر خود را در مورد این محصول برای ما به اشتراک بگذارید" rows="3"></textarea>
        </div>
        <div class="col-12 d-flex align-items-center justify-content-end">
            <button type="submit" class="btn btn-primary">ثبت نظر</button>
        </div>
    </form>

    <h6 class="mb-3 text-right comments-registered">نظرات ثبت شده</h6>
    <div class="w-100 row mx-0 gap-15 comments_cnt"></div>


    <!-- Modal -->
    <div class="modal fade" id="edit_prd" tabindex="-1" role="dialog" aria-labelledby="edit_prdTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row mb-5 px-0 post-comment" action="javascript:void(0)" method="POST">
                        <div class="form-group col-6">
                            <label>عکس محصول:</label>
                            <input name="image" id="prd_image" type="file" accept="image/*" class="form-control"
                                placeholder="عکس محصول را وارد کنید">
                        </div>
                        <div class="form-group col-6">
                            <label>نام محصول:</label>
                            <input name="title" id="prd_title" type="text" class="form-control"
                                placeholder="نام محصول را وارد کنید">
                        </div>
                        <div class="form-group col-6">
                            <label>ایمیل:</label>
                            <input name="email" id="email" type="email" class="form-control"
                                placeholder="name@example.com">
                        </div>
                        <div class="form-group col-6">
                            <label>امتیاز شما به محصول:</label>
                            <select name="score" id="score" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleFormControlTextarea1">نظر شما:</label>
                            <textarea name="comment" id="comment" class="form-control"
                                placeholder="نظر خود را در مورد این محصول برای ما به اشتراک بگذارید" rows="3"></textarea>
                        </div>
                        <div class="col-12 d-flex align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary">ثبت نظر</button>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('site_js_files')
    <script src="/js/products_show.js"></script>
@endsection
