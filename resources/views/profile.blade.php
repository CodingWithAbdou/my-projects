@extends('layouts.app')
@section('content')
    <section class="row my-2">
        <div class="col-md-6 mx-auto">
            <div class="card p-4">
                <div class="text-center my-2">
                    <img src="{{asset('storage/' . auth()->user()->image)}}" alt="" width="84px" height="84px">
                    <h2>{{auth()->user()->name}}</h2>
                </div>
                <form action="/profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="my-2">
                        <label for="name" class="form-label" >الإسم</label>
                        <input type="name" class="form-control" id="name" name="name" value="{{auth()->user()->name}}"  >
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-2">
                        <label for="email" class="form-label" >البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="email" name="email"  value="{{auth()->user()->email}}" >
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-2">
                        <label for="password" class="form-label" > كلمة المرور</label>
                        <input type="password" class="form-control" id="password" name="password"  >
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-2">
                        <label for="password-confirmation" class="form-label" >  تأكيد كلمة المرور </label>
                        <input type="password-confirmation" class="form-control" id="password-confirmation" name="password-confirmation"  >
                        @error('password-confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-2">
                        <label for="image" class="form-label">رفع الصورة</label>
                        <input class="form-control" type="file" id="image"  name="image" />
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="my-4 text-start">
                        <button class="btn btn-primary"> حفظ التعديلات </button>
                        <button class="btn btn-outline-danger" form="out">تسجيل الخروج</button>
                    </div>
                </form>

                <form action="/profile" id="out">
                @method('DELETE')
                </form>
            </div>
        </div>
    </section>
@endsection
