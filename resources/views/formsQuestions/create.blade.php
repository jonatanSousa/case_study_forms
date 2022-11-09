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
    <div class="text-left pt-20">
        <a
            class="text-blue-900   pt-20 text-2xlpb-0 sm:pt-0 hover:text-green-700 transition-all"
            href="{{ route('forms.show', Request::get('form'))}}">
            &larr; Return to Forms
        </a>
    </div>
    <div class="text-center pt-20">
        <h1 class="text-3xl text-gray-700">
            Create Form questions
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

    <div class="flex justify-center pt-20">
        <form action="/forms-questions" method="POST">
            @csrf
            <div class="block">
                <input
                    type="text"
                    class="block shadow-5x1 mb-10 w-80 placeholder-gray-400"
                    name="text"
                    placeholder="Form question Text"
                >

                <input
                    type="number"
                    class="block shadow-5x1 mb-10 w-80 placeholder-gray-400"
                    name="order"
                    placeholder="order"
                >

                <input
                    type="text"
                    class="hidden"
                    name="form_id"
                    value={{Request::get('form')}}
                >

                <button
                    class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
                    type="submit"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>


</div>
</body>
