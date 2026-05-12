<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>

    {{-- Header Section --}}
    @include('home.head_inner')

    {{-- About Section --}}
    <section class="about-section">
        @include('home.about')
    </section>

    {{-- Footer Section --}}
    <footer>
        @include('home.footer')
    </footer>

</body>

</html>