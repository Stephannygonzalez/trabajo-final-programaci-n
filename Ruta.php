use App\Http\Controllers\CVController;

Route::get('/generate-cv', [CVController::class, 'generatePDF']);
