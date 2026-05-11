<!DOCTYPE html>
<html lang="en">

<head>
    
    @include('home.css')

</head>

<body>

    {{-- Header Section --}}
    @include('home.head_inner')


    {{-- Gallery Section --}}
    <section class="gallery-section">

        @include('home.gallery')

    </section>


    {{-- Footer Section --}}
    @include('home.footer')

</body>

</html>