
<html>
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    />
    <title>
        Laravel App
    </title>
    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    />
</head>
<body class="w-full h-full bg-gray-100">
<div class="w-4/5 mx-auto">
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            All Forms
        </h1>
    </div>

    <div class="py-10 sm:py-20">
        <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
           href="forms/create">
            New Form
        </a>
    </div>

    @foreach($forms as $form)
        <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
            <div class="w-11/12 mx-auto pb-10">
                <h2 class="text-gray-900 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                    <a href="{{ route('forms.show', $form->id) }}">
                        {{ $form->name }}
                    </a>
                </h2>
                <p class="text-gray-900 text-lg py-8 w-full break-words">
                    {{ $form->description }}
                </p>
                <div class="float-right" >
                    <a
                        class="text-green-900 text-2xlpb-0 sm:pt-0 hover:text-green-700 transition-all"
                        href="{{ route('forms.edit', $form->id) }}">
                       Edit &rarr;
                    </a>
                    <form action="/forms/{{ $form->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">
                            Delete &rarr;
                        </button>
                    </form>
                </div>
            </div>
            <hr class="border border-1 border-gray-300 mt-10">
        </div>
    @endforeach


</div>
</body>
