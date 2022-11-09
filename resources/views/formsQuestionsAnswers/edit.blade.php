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
            Edit Form answers
        </h1>
        <hr class="border border-1 border-gray-300 mt-10">
    </div>

    {{ Request::get('form') }}

    <div class="flex justify-center pt-20">
        <form action="/forms-questions-answers/{{$answer->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input
                    type="text"
                    class="block shadow-5x1 mb-10 w-80 placeholder-gray-400"
                    name="text"
                    placeholder="Form question Text"
                    value="{{ $answer->text }}"
                >

                <select
                    class="block shadow-5x1 mb-10 w-80 placeholder-gray-400"
                    name="behavior">
                    @foreach ($behaviors as $key => $behavior)
                        <option value="{{ $behavior['id'] }}">
                            {{ $behavior['text'] }}
                        </option>
                    @endforeach
                </select>


                <select
                    class="block shadow-5x1 mb-10 w-80 placeholder-gray-400"
                    name="restriction">
                    <option value=null>select restriction</option>
                    @foreach ($restrictions as $key => $restriction)
                        <option value="{{ $restriction['id'] }}">
                            {{ $restriction['text'] }}
                        </option>
                    @endforeach
                </select>

               <!-- <input
                    type="number"
                    class="block shadow-5x1 mb-10 w-80 placeholder-gray-400"
                    name="order"
                    placeholder="order"
                >
-->
                <input
                    type="text"
                    class="hidden"
                    name="forms_questions_id"
                    value="{{$answer->forms_questions_id}}"
                >
                <input
                    type="text"
                    class="hidden"
                    name="form_id"
                    value={{ $answer->forms_id }}
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
