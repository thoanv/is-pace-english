<?php

namespace App\Http\Controllers\Ajax;

use App\Enums\CommonEnum;
use App\Models\Activities;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Center;
use App\Models\Course;
use App\Models\Courses\CourseDetail;
use App\Models\Feelings\Feeling;
use App\Models\Feelings\FeelingGroup;
use App\Models\Honour;
use App\Models\Menu;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Systems\Role;
use App\Models\Teacher;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AjaxController extends BaseController
{
    public function __construct()
    {

    }

    public function enableColumn(Request $request)
    {
        Validator::make($request->all(), [
            'id' => 'required',
            'table' => 'required',
            'column' => 'required',
        ])->validate();
        $id = $request->get('id');
        $column = $request->get('column');

        $model = null;
        switch ($request->get('table')) {
            case 'roles':
                $model = Role::find($id);
                break;
            case 'categories':
                $model = Category::find($id);
                break;
            case 'sliders':
                $model = Slide::find($id);
                break;
            case 'users':
                $model = User::find($id);
                break;
            case 'activities':
                $model = Activity::find($id);
                break;
            case 'teachers':
                $model = Teacher::find($id);
                break;
            case 'units':
                $model = Unit::find($id);
                break;
            case 'courses':
                $model = Course::find($id);
                break;
            case 'posts':
                $model = Post::find($id);
                break;
            case 'menus':
                $model = Menu::find($id);
                break;

            default:
                break;
        }
        if ($model) {
            $result = $model->update([
                $column => $model[$column] == CommonEnum::UNACTIVATED ? CommonEnum::ACTIVATED : CommonEnum::UNACTIVATED,
            ]);

            return $this->sendResponse($result, 'successfully.');
        }

        return $this->sendResponse(false, 'successfully.');
    }

    // public function getQuestionsByCategory(Request $request, $category_id): \Illuminate\Http\JsonResponse
    // {
    //     $questions = $this->questionService->getByCategory($category_id);
    //     return response()->json([
    //         'questions' => $questions
    //     ]);
    // }

    // public function getQuestionsByProgramme(Request $request, $programme_id): \Illuminate\Http\JsonResponse
    // {
    //     $questions = $this->questionService->getByProgramme($programme_id);
    //     return response()->json([
    //         'questions' => $questions
    //     ]);
    // }

    // public function addQuestionsForExamByCategory(Request $request)
    // {
    //     try {
    //         $this->examQuestionService->addQuestionsForExamByCategory($request['questions'], $request['exam_id']);
    //         return response()->json([
    //             'message' => 'Success'
    //         ]);
    //     } catch (Exception $error) {
    //         return response()->json([
    //             'error' => $error->getMessage()
    //         ]);
    //     }
    // }

    // public function getExamScoreTest(Request $request)
    // {
    //     $exams = $this->examService->getExamScoreTest();
    //     // dd($exams);
    //     return response()->json([
    //         'exams' => $exams
    //     ]);
    // }

    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    // public function getExamByProgrammeAndExamFormat(Request $request): \Illuminate\Http\JsonResponse
    // {
    //     $exams = $this->examService->getExamByProgrammeAndExamFormat($request);
    //     return response()->json([
    //         'exams' => $exams
    //     ]);
    // }

    // public function getExamByProgramme(Request $request): \Illuminate\Http\JsonResponse
    // {
    //     $exams = $this->examService->getExamByProgramme($request);
    //     return response()->json([
    //         'exams' => $exams
    //     ]);
    // }

}
