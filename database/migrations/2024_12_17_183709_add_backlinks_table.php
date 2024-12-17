use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklinksTable extends Migration
{
    public function up()
    {
        Schema::create('backlinks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for the owner
            $table->string('url'); // The URL of the backlink
            $table->string('anchor_text'); // The anchor text used for the backlink
            $table->integer('domain_authority')->nullable(); // Domain authority of the linking site
            $table->integer('page_authority')->nullable(); // Page authority of the linking page
            $table->string('status')->default('active'); // Current status of the backlink
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('backlinks');
    }
}