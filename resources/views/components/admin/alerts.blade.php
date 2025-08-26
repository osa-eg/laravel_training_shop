@if (session('success'))
    <div class="mt-6 alert alert-success" style="margin-top:40px;">{{ session('success') }} </div>
@endif

@if (session('errot'))
    <div class="mt-6 alert alert-danger" style="margin-top:40px;">{{ session('error') }} </div>
@endif
