<!doctype html>
<html lang="en">

 <!-- <head> -->
@include('include.head')

<body>

<!-- <nav> -->
@include('include.nav')

    <main role="main">
        @yield('content')
    </main>


<!-- Кнопка вверх -->
    <div class="btn-up btn-up_hide"></div>

<!-- <footer> -->
@include('include.footer')


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script src="{{url('js/btnUp.js')}}"></script>
    <script src="{{url('js/details.js')}}"></script>
    <script src="{{url('js/gallery.js')}}"></script>
    <script src="js/owl.carousel.min.js"></script>
</body>

</html>