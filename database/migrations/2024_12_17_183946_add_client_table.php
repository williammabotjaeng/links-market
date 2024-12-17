use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')->constrained()->onDelete('cascade'); // Foreign key for the owner
            $table->foreignId('client_user_id')->constrained()->onDelete('cascade'); // Foreign key for the client user
            $table->string('name'); // Name of the client
            $table->string('email')->unique(); // Email of the client
            $table->string('phone')->nullable(); // Phone number of the client
            $table->string('address')->nullable(); // Address of the client
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clients');
    }
}