@extends('layouts.app')

@section('content')
<style>
    .welcome,
    .welcome * {
        box-sizing: border-box;
    }
    .welcome {
        background: #ffffff;
        height: 1024px;
        position: relative;
        overflow: hidden;
    }
    .sistem-pencairan-kip-kuliah-merdeka {
        text-align: left;
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 64px;
        font-weight: 600;
        position: absolute;
        left: 121px;
        top: 348px;
        width: 679px;
    }
    .sistem-pencairan-kip-kuliah-merdeka-span {
        color: var(--blue-navy-blue-navy-900, #071120);
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 64px;
        font-weight: 600;
    }
    .sistem-pencairan-kip-kuliah-merdeka-span2 {
        color: var(--light-blue-light-blue-500, #0091c9);
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 64px;
        font-weight: 600;
    }
    .sistem-pencairan-kip-kuliah-merdeka-span3 {
        color: var(--blue-navy-blue-navy-900, #071120);
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 64px;
        font-weight: 600;
    }
    .sistem-pencairan-kip-kuliah-merdeka-span4 {
        color: var(--light-blue-light-blue-500, #0091c9);
        font-family: "Inter-SemiBold", sans-serif;
        font-size: 64px;
        font-weight: 600;
    }
    .kartu-indonesia-pintar-kuliah-kip-kuliah-adalah-salah-satu-upaya-untuk-membantu-asa-para-siswa-yang-memiliki-keterbatasan-ekonomi-tetapi-berprestasi-untuk-melanjutkan-studi-di-perguruan-tinggi {
        color: var(--blue-navy-blue-navy-700, #0c1c35);
        text-align: justify;
        font-family: "Inter-Regular", sans-serif;
        font-size: 24px;
        line-height: 175%;
        font-weight: 400;
        position: absolute;
        left: 122px;
        top: 532px;
        width: 616px;
    }
    ._1-2 {
        width: 823px;
        height: 511px;
        position: absolute;
        left: 680px;
        top: 276px;
        object-fit: cover;
    }
    .login-register {
        position: absolute;
        inset: 0;
    }
    .button, .button2 {
        width: 139.68px;
        height: 55.37px;
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-family: "Montserrat-Medium", sans-serif;
        font-size: 20px;
        letter-spacing: -0.015em;
        font-weight: 500;
        border-radius: 6px;
        cursor: pointer;
        text-decoration: none;
    }
    .button {
        left: 376.32px;
        top: 759.63px;
        background: #0f2444;
        color: #ffffff;
    }
    .button:hover {
        background: #0d1e38;
    }
    .button2 {
        left: 213px;
        top: 759.63px;
        background: #ffffff;
        color: #0f2444;
        border: 1px solid #0f2444;
    }
    .button2:hover {
        background: #f1f1f1;
    }
    .whats-app-image-2024-03-06-at-14-23 {
        width: 237px;
        height: 66px;
        position: absolute;
        left: 507px;
        top: 76px;
        object-fit: cover;
    }
    .logo-kampus-merdeka-kemendikbud-1 {
        width: 155px;
        height: 82px;
        position: absolute;
        left: 778px;
        top: 68px;
        object-fit: cover;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
        .welcome {
            padding: 20px;
            height: auto;
        }
        .sistem-pencairan-kip-kuliah-merdeka {
            font-size: 24px;
            margin: 20px auto;
            width: auto;
            text-align: center;
        }
        .kartu-indonesia-pintar-kuliah-kip-kuliah-adalah-salah-satu-upaya-untuk-membantu-asa-para-siswa-yang-memiliki-keterbatasan-ekonomi-tetapi-berprestasi-untuk-melanjutkan-studi-di-perguruan-tinggi {
            font-size: 16px;
            margin: 20px 20px;
            width: auto;
            text-align: center;
        }
        ._1-2 {
            width: 100%;
            height: auto;
            margin-top: 20px;
        }
        .button, .button2 {
            width: 100%;
            max-width: 200px;
            margin: 10px auto;
            display: block;
        }
        .whats-app-image-2024-03-06-at-14-23, .logo-kampus-merdeka-kemendikbud-1 {
            width: 100px;
            height: auto;
            margin: 20px auto;
            display: block;
        }
    

    }
</style>

<div class="welcome">
    <div class="sistem-pencairan-kip-kuliah-merdeka">
        <span>
            <span class="sistem-pencairan-kip-kuliah-merdeka-span">Sistem</span>
            <span class="sistem-pencairan-kip-kuliah-merdeka-span2">Pencairan</span>
            <span class="sistem-pencairan-kip-kuliah-merdeka-span3">KIP Kuliah</span>
            <span class="sistem-pencairan-kip-kuliah-merdeka-span4">Merdeka</span>
        </span>
    </div>
    <div class="kartu-indonesia-pintar-kuliah-kip-kuliah-adalah-salah-satu-upaya-untuk-membantu-asa-para-siswa-yang-memiliki-keterbatasan-ekonomi-tetapi-berprestasi-untuk-melanjutkan-studi-di-perguruan-tinggi">
        Kartu Indonesia Pintar Kuliah (KIP-Kuliah) adalah salah satu upaya untuk
        membantu asa para siswa yang memiliki keterbatasan ekonomi tetapi
        berprestasi untuk melanjutkan studi di perguruan tinggi.
    </div>
    <img class="_1-2" src="{{ asset('img/gambar kanan.png') }}" alt="Image" />

    @if (Route::has('login'))
        @auth
            <a href="{{ url('/home') }}" class="button">Dashboard</a>
        @else
            <a href="{{ route('register') }}" class="button">Register</a>
            <a href="{{ route('login') }}" class="button2">Log in</a>
        @endauth
    @endif

    <img class="whats-app-image-2024-03-06-at-14-23" src="{{ asset('img/logo.png') }}" alt="WhatsApp Image" />
    <img class="logo-kampus-merdeka-kemendikbud-1" src="{{ asset('img/Logo_Kampus_Merdeka_Kemendikbud.png') }}" alt="Logo Kampus Merdeka" />
</div>
@endsection
