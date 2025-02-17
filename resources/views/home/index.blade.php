<h1>Hello World</h1>

@php
    $message = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iste asperiores debitis ipsum vel cum numquam quidem, libero laudantium adipisci. Voluptate quo inventore animi facere consectetur rerum officiis natus eum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iste asperiores debitis ipsum vel cum numquam quidem, libero laudantium adipisci. Voluptate quo inventore animi facere consectetur rerum officiis natus eum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias iste asperiores debitis ipsum vel cum numquam quidem, libero laudantium adipisci. Voluptate quo inventore animi facere consectetur rerum officiis natus eum!';

    $color = 'white';

    $bgColor = 'black';

    $padding = '1rem'
@endphp

@include('shared.alert', ['color' => $color, 'bgColor' => $bgColor, 'padding' => $padding, 'message' => $message])