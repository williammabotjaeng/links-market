use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferralsTable extends Migration
{
    public function up()
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('referrer_id')->constrained()->onDelete('cascade'); // Foreign key
            $table->string('referred_email'); // Email of the referred user
            $table->decimal('commission_rate', 5, 2)->default(10.00); // Commission rate
            $table->decimal('total_spent', 10, 2)->default(0.00); // Total amount spent by the referred user
            $table->decimal('commission_earned', 10, 2)->default(0.00); // Total commission earned
            $table->string('status')->default('active'); // Status of the referral
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referrals');
    }
}