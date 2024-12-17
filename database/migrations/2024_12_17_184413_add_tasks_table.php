use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key
            $table->string('product_type'); // Type of product
            $table->string('site_url'); // URL of the website
            $table->string('promoted_url'); // URL being promoted
            $table->string('anchor_text'); // Anchor text for the promoted URL
            $table->string('status'); // Current status of the task
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}