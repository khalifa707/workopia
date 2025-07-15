<form method="POST" action="{{route('logout')}}" class="inline">
    @csrf
    <button type="submit" class="text-white hover:underline py-2">
        <i class="fa fa-sign-out"></i> Logout
    </button>
</form>
