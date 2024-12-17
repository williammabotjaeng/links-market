use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key for the publisher
            $table->foreignId('client_id')->constrained()->onDelete('cascade'); // Foreign key for the advertiser
            $table->string('invoice_number')->unique(); // Unique invoice number
            $table->decimal('amount', 10, 2); // Total amount of the invoice
            $table->string('status')->default('unpaid'); // Current status of the invoice
            $table->date('issue_date'); // Date when the invoice was issued
            $table->date('due_date'); // Date when the invoice is due
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}