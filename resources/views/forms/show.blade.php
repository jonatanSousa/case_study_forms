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
            <h1 class="text-3xl text-gray-700">
                {{ $form->name }}
            </h1>
            <p class="text-lg text-gray-700 py-6" >
                {{ $form->description }}
            </p>
            <hr class="border border-1 border-gray-300 mt-10">
            <div>
                @forelse ($form->FormsQuestions as $formQuestions)
                    <div class="bg-white pt-10 rounded-lg drop-shadow-2xl sm:basis-3/4 basis-full sm:mr-8 pb-10 sm:pb-0">
                        <div class="w-11/12 mx-auto pb-10">
                            <h2 class="text-gray-500 text-2xl font-bold pt-6 pb-0 sm:pt-0 hover:text-gray-700 transition-all">
                                <a href="{{ route('forms-questions.edit', $formQuestions->id) }}">
                                    {{$formQuestions->text}}
                                </a>
                            </h2>
                            <div >
                                @forelse ($form->FormsQuestionsAnswers as $formsQuestionsAnswers)
                                    @if($formQuestions->id === $formsQuestionsAnswers->forms_questions_id)
                                        <p>
                                            <form action="/forms-questions-answers/{{ $formsQuestionsAnswers->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a class="text-gray-400 pb-0 sm:pt-0 hover:text-gray-700 transition-all"
                                                   href="{{ route('forms-questions-answers.edit', $formsQuestionsAnswers->id) }}">
                                                    {{ $formsQuestionsAnswers->text }}
                                                    | {{$formsQuestionsAnswers->behavior}}
                                                </a>
                                                <button class="text-red-900" type="submit">
                                                    Delete &rarr;
                                                </button>
                                            </form>
                                        </p>
                                    @endif
                                @empty
                                    <p>

                                    </p>
                                @endforelse
                            </div>
                            <div class="float-center" >
                                <a
                                    class="text-green-900 text-2xlpb-0 sm:pt-0 hover:text-green-700 transition-all"
                                    href="{{ route('forms-questions-answers.create', ["formQuestions" => $formQuestions->id, "formId" => $form->id]) }}">
                                    Add New answer &rarr;
                                </a>
                            </div>
                    </div>

                @empty

                @endforelse
            <div class="py-10 sm:py-20">
                <a class="primary-btn inline text-base sm:text-xl bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
                   href="{{ route('forms-questions.create', ["form" => $form->id]) }}">
                    New question
                </a>
            </div>
        </div>
    </div>
</body>
</html>
