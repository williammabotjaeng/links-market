use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key
            $table->foreignId('client_id')->nullable()->constrained()->onDelete('set null'); // Foreign key
            $table->foreignId('project_id')->nullable()->constrained()->onDelete('set null'); // Foreign key
            $table->foreignId('social_media_id')->nullable()->constrained()->onDelete('set null'); // Foreign key
            $table->foreignId('website_id')->nullable()->constrained()->onDelete('set null'); // Foreign key
            $table->foreignId('backlink_id')->nullable()->constrained()->onDelete('set null'); // Foreign key
            $table->foreignId('account_id')->nullable()->constrained()->onDelete('set null'); // Foreign key
            $table->string('title'); // Title of the report
            $table->text('content'); // Content of the report
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
}