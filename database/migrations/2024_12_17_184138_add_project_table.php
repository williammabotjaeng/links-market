use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key
            $table->string('name'); // Name of the project
            $table->text('description')->nullable(); // Description of the project
            $table->decimal('budget', 10, 2)->default(0.00); // Budget allocated for the project
            $table->date('start_date')->nullable(); // Start date of the project
            $table->date('end_date')->nullable(); // End date of the project
            $table->string('status')->default('active'); // Current status of the project
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}