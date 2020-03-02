@extends(backpack_view('blank'))

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];
    $widgets['before_content'][] = [
    'type'        => 'progress',
    'class'       => 'card text-white bg-primary mb-2',
    'value'       => '11.456',
    'description' => 'Registered users.',
    'progress'    => 57, // integer
    'hint'        => '8544 more until next milestone.', ]
endphp-->


@include(backpack_view('ccpro.user_data'))

@section('content')



@endsection