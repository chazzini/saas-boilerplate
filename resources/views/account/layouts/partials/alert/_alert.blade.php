@if (Session::has('success'))
    @component('account.layouts.partials.alert._alert_component', ['type' => 'success'])
        {{ session('success') }}
    @endcomponent
@endif
@if (Session::has('error'))
    @component('account.layouts.partials.alert._alert_component', ['type' => 'danger'])
        {{ session('error') }}
    @endcomponent
@endif
