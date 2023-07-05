@extends('layouts.layout')

@section('content')
    <div class="container about">
        <h1 class="head">About</h1>
        <hr>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati quae necessitatibus non quis at.
            Repellendus
            placeat veritatis molestias provident voluptates odio cumque quaerat sequi et corporis eveniet in, eius
            recusandae.</p>

        <div class="row">
            <div class="col">
                <img class="img"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBIgpxA6fX61mmBOlF0olSfVK54Iq2St8Q6ctxHwQ4sQ&s"
                    alt="">
            </div>
            {{-- @dd($read) --}}
            <div class="col">
                <h3>UI/UX Designer & Web Developer.</h3>
                <p>{{ $read->about_description }}</p>
                <div class="row">
                    <div class="col">
                        <ul>
                            <li><b>Website:</b> </li>
                            <li><b>Birthday:</b> <span class="infor">{{ $read->DateOfBirth }}</span> </li>
                            <li><b>Phone:</b> <span class="infor">{{ $read->phone }}</span> </li>
                            <li><b> City:</b>{{ $read->address }} </li>

                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li><b>Age:</b>{{ $read->DateOfBirth }} </li>
                            <li><b>Degree:</b> {{ $read->degree }} </li>
                            <li><b>Email:</b> {{ $read->email }} </li>
                            <li><b>Freelance:</b> </li>
                        </ul>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut pariatur porro ducimus? Nihil provident
                    impedit velit rerum consequuntur, sequi ex eligendi nisi in aliquam voluptatum voluptatibus commodi
                    dolorum expedita adipisci quia repellendus dicta fugit facere distinctio eaque. Et iste error quod
                    maiores! Dolor ea qui, dolorem magnam doloremque tempora saepe!</p>
            </div>
        </div>

    </div>

    {{-- About fact --}}
@endsection
