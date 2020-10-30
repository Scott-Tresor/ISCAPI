<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Models\Communicate;
use App\Models\Result;
use App\Models\Student;
use Illuminate\Contracts\Support\Renderable;

/****
 * Class HomeController
 * @author scotttresor@gmail.com
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @var Student
     */
    private Student $student;
    /**
     * @var Result
     */
    private Result $result;
    /**
     * @var Communicate
     */
    private Communicate $communicate;

    /***
     * HomeController constructor.
     * @param Student     $student
     * @param Result      $result
     * @param Communicate $communicate
     */
    public function __construct(Student $student, Result $result, Communicate $communicate)
    {
        $this->middleware('auth');
        $this->student = $student;
        $this->result = $result;
        $this->communicate = $communicate;
    }

    /**
     * Show the application dashboard.
     * @return Renderable
     */
    public function index()
    {
        return view('home', [
            'student' => $this->student::all(),
            'result' => $this->result::all(),
            'communicate' => $this->communicate::all()
        ]);
    }
}
