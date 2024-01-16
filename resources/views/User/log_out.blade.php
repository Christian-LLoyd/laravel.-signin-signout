@include('partials.__header')

<x-messages />
@csrf
<form action="/logout" method="POST">
    @csrf
    <button class="block py-2 pr-4 pl-3">Log out</button>


</form>

@include('partials.__footer')