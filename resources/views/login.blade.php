<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img/Rich-Music-B.png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>LOGIN</title>
</head>
<body>
    <main>
        <div class="d-flex justify-content-center align-items-center vh-100 position-relative">
            <div class="card shadow-lg border-0 rounded-lg p-4 p-lg-5 " style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body d-flex align-items-center">
                            <div class="flex-grow-1 p-3">
                                <h3 class="text-center fs-1 my-4 display-4">Login</h3>
                                <form method="post" action="{{ route('login.post') }}" class="w-100">
                                    @csrf
                                
                                    {{-- Tampilkan semua pesan error --}}
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-floating mb-3">
                                        <input
                                            class="form-control"
                                            id="username"
                                            value="{{ old('username') }}"
                                            type="text"
                                            name="username"
                                            placeholder="Username"
                                            required
                                        />
                                        <label for="username">Username <i class="fa-solid fa-user"></i></label>
                                    </div>
                                
                                    <div class="form-floating mb-3">
                                        <input
                                            class="form-control"
                                            id="password"
                                            type="password"
                                            name="password"
                                            placeholder="Password"
                                            required
                                        />
                                        <label for="password">Password <i class="fa-solid fa-lock"></i></label>
                                    </div>
                                
                                    <div class="d-grid gap-2 mx-auto">
                                        <button class="btn btn-secondary btn-lg" type="submit">
                                            Login <i class="fa-solid fa-right-to-bracket"></i>
                                        </button>
                                    </div>
                                </form>
                                
    
                            </div>
                            <div class="border-start ps-3 ms-3 d-none d-md-block">
                                <img
                                    src="/img/Rich-Music-B.png"
                                    class="img-fluid"
                                    alt="Logo"
                                    style="max-width: 200px; height: auto;"
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <style>
        @media (min-width: 992px) {
            .card {
                padding: 3rem;
            }
            h3 {
                font-size: 2.5rem;
            }
            .btn {
                font-size: 1.25rem;
            }
        }
    </style>
</body>
</html>