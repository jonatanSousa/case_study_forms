<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use App\Models\FormsQuestionsAnswers;

class FormQuestionsAnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('formsQuestions.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $request = request(); //save helper result to variable, so it can be reused
        $forms = Forms::find($request->query('formId'));
        return view('formsQuestionsAnswers.create', [
            'behaviors' => $this->getBehaviors($forms->FormsQuestions),
            'restrictions' => $this->getRestrictions()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        FormsQuestionsAnswers::create([
            'text' => $request->input('text'),
            'forms_questions_id' => $request->input('forms_questions_id'),
            'behavior' => $request->input('behavior'),
            'restriction' => $request->input('restriction'),
            'order' => $request->input('order'),
            'form_id' => $request->input('form_id'),
        ]);

        return redirect('/forms/'.$request->input('form_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ///get form
        $formAnswer = FormsQuestionsAnswers::find($id);
        $forms = Forms::find($formAnswer->form_id);
        return view('formsQuestionsAnswers.edit', [
            'answer' => $formAnswer,
            'behaviors' => $this->getBehaviors($forms->FormsQuestions),
            'restrictions' => $this->getRestrictions()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formAnswer = FormsQuestionsAnswers::find($id);
        $formAnswer->update([
            'text' => $request->input('text'),
            'forms_questions_id' => $request->input('forms_questions_id'),
            'behavior' => $request->input('behavior'),
            'restriction' => $request->input('restriction'),
            'order' => $request->input('order'),
        ]);

        return redirect('/forms/'.$formAnswer->form_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answers = FormsQuestionsAnswers::find($id);
        $answers->delete();
        return redirect('/forms/'.$answers->form_id);
    }

    private function getBehaviors($formQuestions) {
        $behaviors = [];
        foreach ($formQuestions as $questions){
            array_push($behaviors, array('id' => 'ASK_'.$questions->id,'text' =>  $questions->text));
        }
        //TODO get products by category
        array_push($behaviors, array('id' => 'sildenafil_50', 'text' => 'Sildenafil 50mg)'));
        array_push($behaviors, array('id' => 'sildenafil_100', 'text' => 'Sildenafil 100mg)'));
        array_push($behaviors, array('id' =>'tadalafil_10' , 'text'=> 'Tadalafil 10mg)'));
        array_push($behaviors, array('id' =>'tadalafil_20', 'text' => 'Tadalafil 20mg)'));
        array_push($behaviors, array('id' =>'sildenafil_50_or_tadalafil_10', 'text' => 'Sildenafil 50mg or Tadalafil 10mg'));
        array_push($behaviors, array('id' =>'sildenafil_100_or_tadalafil_20', 'text' => 'Sildenafil 100mg or Tadalafil 20mg'));

        return $behaviors;
    }
    private function getRestrictions() {
        $restriction = [];
        array_push($restriction, array('id' => 'exclude_all', 'text' => 'exclude all products'));
        array_push($restriction, array('id' => 'sildenafil', 'text' => 'exclude sildenafil'));
        array_push($restriction, array('id' => 'tadalafil', 'text' => 'exclude tadalafil'));
        return $restriction;
    }
}
