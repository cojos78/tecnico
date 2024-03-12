<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <style>
        div.menu {
            background-color: var(--color-pri);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
            position: absolute;
            top: -800px;
            opacity: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 999;
            justify-content: center;
            min-height: 100vh;
            transition: all 0.5s ease-in;
            width: 440px;

            a:is(:link, :visited) {
                border-radius: 50px;
                color: #fff;
                font-size: 2rem;
                padding: 10px 20px;
                text-decoration: none;
            }

            a.closem {
                position: absolute;
                top: 44px;
                right: 0px;
                border: 2px solid #fff;
            }

            nav {
                color: #fff9;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1rem;

                img {
                    border: 2px solid #fff;
                    border-radius: 60%;
                    object-fit: cover;
                    height: 200px;
                    width: 200px;
                }

                h4, h5 {
                    margin: 0;
                }

                a.closes {
                    border: 2px solid #fff;
                    
                }
                .closes{
                    border-radius: 20px;
                    background-color: #022b3a;
                    border: 2px solid #fff;
                    color: white;
                    width: 164px;
                    height: 43px;
                    cursor: pointer
                }
                .closes:hover{
                    box-shadow: 5px 5px 5px black;
                    transform: scale(1.2);
                    transition: 1s;
                    
                }
            }
        }
        div.menu.open {
            top: 0;
            opacity: 1;
        }


    </style>
</head>
<body>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @yield('js')
</body>
</html>