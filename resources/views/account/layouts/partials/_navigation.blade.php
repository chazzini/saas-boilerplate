<div class="list-group">

    <a class="list-group-item list-group-item-action {{ return_if(on_page('account.index'), 'active') }}"
        href="{{ route('account.index') }}">Account Overview</a>

    <a class="list-group-item list-group-item-action {{ return_if(on_page('account.profile'), 'active') }}"
        href="{{ route('account.profile') }}">Profile</a>


    <a class="list-group-item list-group-item-action {{ return_if(on_page('account.password.index'), 'active') }}"
        href="{{ route('account.password.index') }}">Change
        Password</a>


</div>
